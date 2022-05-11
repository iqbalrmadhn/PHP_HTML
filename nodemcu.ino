#include <SoftwareSerial.h>
#include <ESP8266WiFi.h>

// Network ID
const char* ssid     = "VEA";
const char* password = "tomodochi";
const char* host = "10.100.2.130";
const int port = 80;
String apiUrl;

static const uint8_t D0   = 13;
static const uint8_t D1   = 5;
static const uint8_t D2   = 4;
String prob;
int number;
int id, a = 0, b, c=0;
int deviasi, bocor, error;
int no_press=50;
WiFiClient client;

SoftwareSerial Ser_mcu(14, 12);

#define T_deviasi D0
#define T_bocor D1
#define M_error D2

void setup() {
  Serial.begin(115200);
  Ser_mcu.begin(115200);
    Serial.print("Connecting to ");
    Serial.println(ssid);
    WiFi.begin(ssid, password);
    while (WiFi.status() != WL_CONNECTED) {
        delay(500);
        Serial.print(".");
      }
    Serial.println("");
    Serial.println("WiFi connected.");
    Serial.println("IP address: ");
    Serial.println(WiFi.localIP());
  pinMode(T_deviasi, INPUT_PULLUP);
  pinMode(T_bocor, INPUT_PULLUP);
  pinMode(M_error, INPUT_PULLUP);
}

void loop() {
    if (!client.connect(host, port)) {
        Serial.println("Connection failed");
        return;
      }
  
//  if (Ser_mcu.available()) {
//    int data = Ser_mcu.parseInt();
//    if (data != 0) {
//      no_press = data;
//      b = 1;
//    }
//  }
//
//  if (b == 1) {
//    update_koneksi();
//    Serial.print("press ");
//    Serial.print(no_press);
//    Serial.println(" connected");
//    b = 0;
//  }
  id = no_press-1;
  if (!digitalRead(T_deviasi) || !digitalRead(T_bocor) ||
      !digitalRead(M_error)) {
    input();
    update_database();
    if (c == 0) {
      if (digitalRead(T_deviasi) == LOW) {
        prob = "Thermolator_Deviasi";
      }
      else if (digitalRead(T_bocor) == LOW) {
        prob = "Thermolator_Bocor";
      }
      else if (digitalRead(M_error) == LOW) {
        prob = "Thermolator_Pump_Fail";
      }
    save_time();
    c = 1;
  }
  delay(1000);
    a = 1;
  }
  
  else if (digitalRead(T_deviasi) && digitalRead(T_bocor) &&
      digitalRead(M_error) && a == 1) {
    deviasi = 0;
    bocor = 0;
    error = 0;
    input();
    update_database();
    delay(1000);
    a = 0;
    c = 0;
  }
}

void input() {
  if (digitalRead(T_deviasi) == LOW) {
    if (digitalRead(T_bocor) == LOW) {
      if (digitalRead(M_error) == LOW) {
        deviasi = 1;
        bocor = 1;
        error = 1;
      }
      else {
        deviasi = 1;
        bocor = 1;
        error = 0;
      }
    }
    else {
      if (digitalRead(M_error) == LOW) {
        deviasi = 1;
        bocor = 0;
        error = 1;
      }
      else {
        deviasi = 1;
        bocor = 0;
        error = 0;
      }
    }
  }
  else {
    if (digitalRead(T_bocor) == LOW) {
      if (digitalRead(M_error) == LOW) {
        deviasi = 0;
        bocor = 1;
        error = 1;
      }
      else {
        deviasi = 0;
        bocor = 1;
        error = 0;
      }
    }
    else {
      if (digitalRead(M_error) == LOW) {
        deviasi = 0;
        bocor = 0;
        error = 1;
      }
      else {
        deviasi = 0;
        bocor = 0;
        error = 0;
      }
    }
  }
}

void update_koneksi()
{
  while (client.connect(host, port)) {
    String apiUrl = "/Thermolator/index.php?";
    apiUrl += "mode=update_ket";
    apiUrl += "&id=";
    apiUrl += id;
    apiUrl += "&keterangan=";
    apiUrl += "connected";

    Serial.println(apiUrl);
    Serial.println(" ");

    client.print(String("GET ") + apiUrl + " HTTP/1.1\r\n" +
                 "Host: " + host + "\r\n" + "Connection: close\r\n\r\n");

//    while (client.connected() || client.available()) {
//      String line = client.readStringUntil('\r');
//      Serial.println(line);
//    }
    break;
  }
}

void update_database()
{
  Serial.print(" nilai deviasi = "); Serial.println(deviasi);
  Serial.print(" nilai bocor = "); Serial.println(bocor);
  Serial.print(" nilai error = "); Serial.println(error);
  Serial.println(" ");

  while (client.connect(host, port)) {
    String apiUrl = "/Thermolator/index.php?";
    apiUrl += "mode=update_data";
    apiUrl += "&id=";
    apiUrl += id;
    apiUrl += "&deviasi=";
    apiUrl += deviasi;
    apiUrl += "&bocor=";
    apiUrl += bocor;
    apiUrl += "&error=";
    apiUrl += error;
    Serial.println(apiUrl);
    Serial.println(" ");

    client.print(String("GET ") + apiUrl + " HTTP/1.1\r\n" +
                 "Host: " + host + "\r\n" + "Connection: close\r\n\r\n");

//    while (client.connected() || client.available()) {
//      String line = client.readStringUntil('\r');
//      Serial.println(line);
//    }
    break;
  }
}

void save_time()
{
  while (client.connect(host, port)) {
    String apiUrl = "/Thermolator/index.php?";
    apiUrl += "mode=time";
    apiUrl += no_press;
    apiUrl += "&masalah=";
    apiUrl += prob;

    Serial.println(apiUrl);
    Serial.println(" ");

    client.print(String("GET ") + apiUrl + " HTTP/1.1\r\n" +
                 "Host: " + host + "\r\n" + "Connection: close\r\n\r\n");

//    while (client.connected() || client.available()) {
//      String line = client.readStringUntil('\r');
//      Serial.println(line);
//    }
    break;
  }
}

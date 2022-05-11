<?php

//include library utama
include_once 'main.php';

// Buat Instance baru
$app = new Thermolator();

// Baca query dari alamat
$app->query_string = $_SERVER['QUERY_STRING'];

// Cek apakah ada query bernama mode?
if ($app->is_url_query('mode')) {

    // Bagi menjadi beberapa operasi
    switch ($app->get_url_query_value('mode')) {

        default:
            $app->read_data();
        
        case 'read':
            $app->read_data();
            break;

        case 'history':
            $app->history();
            break;
        
        case 'time1':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine1($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time2':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine2($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time3':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine3($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time4':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine4($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time5':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine5($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time6':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine6($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time7':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine7($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time8':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine8($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time9':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine9($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time10':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine10($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
                
        case 'time11':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine11($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time12':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine12($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time13':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine13($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time14':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine14($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time15':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine15($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time16':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine16($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time17':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine17($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time18':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine18($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time19':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine19($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time20':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine20($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
                
        case 'time21':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine21($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time22':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine22($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time23':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine23($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time24':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine24($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time25':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine25($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time26':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine26($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time27':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine27($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time28':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine28($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time29':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine29($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time30':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine30($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
                
        case 'time31':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine31($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time32':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine32($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time33':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine33($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time34':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine34($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time35':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine35($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time36':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine36($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time37':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine37($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time38':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine38($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time93':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine39($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time40':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine40($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
                
        case 'time41':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine41($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time42':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine42($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time43':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine43($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time44':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine44($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time45':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine45($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time46':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine46($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time47':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine47($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time48':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine48($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time49':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine49($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        case 'time50':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine50($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
                
        case 'time51':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine51($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time52':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine52($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time53':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine53($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time54':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine54($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'time55':
            if ($app->is_url_query('masalah'))
            {
                $problem = $app->get_url_query_value('masalah');
                $app->create_time_machine55($problem);
            } else {
                $error = [
                    'masalah'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;
        
        
        // case 'delete':
        //     if ($app->is_url_query('id'))
        //     {
        //         $id = $app->get_url_query_value('id');
        //         $app->delete_data($id);
        //     } else {
        //         $error = [
        //             'id'=>'required',
        //         ];
        //         echo $app->error_handler($error);
        //     }
        // break;

        case 'update_ket':
            if ($app->is_url_query('id'))
            {
                
                $id = $app->get_url_query_value('id');
                $ket = $app->get_url_query_value('keterangan');
                $app->update_ket($id,$ket);
            
                
            } else {
                
                $error = [
                    'id'=>'required',
                    'keterangan'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'update_data':
            if ($app->is_url_query('id'))
            {
                
                $id = $app->get_url_query_value('id');
                $dev = $app->get_url_query_value('deviasi');
                $bcr = $app->get_url_query_value('bocor');
                $err = $app->get_url_query_value('error');
                $app->update_data($id,$dev,$bcr,$err);
            
                
            } else {
                
                $error = [
                    'id'=>'required',
                    'deviasi'=>'required',
                    'bocor'=>'required',
                    'error'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

    }
} elseif ($app->is_url_query('history')) {
    switch ($app->get_url_query_value('history')) {
        default:
            $app->history();

        case 'thermo1':
            $app->h_thermo1();
            break;

        case 'thermo2':
            $app->h_thermo2();
            break;
            
        case 'thermo3':
            $app->h_thermo3();
            break;

        case 'thermo4':
            $app->h_thermo4();
            break;
        
        case 'thermo5':
            $app->h_thermo5();
            break;

        case 'thermo6':
            $app->h_thermo6();
            break;

        case 'thermo7':
            $app->h_thermo7();
            break;
            
        case 'thermo8':
            $app->h_thermo8();
            break;

        case 'thermo9':
            $app->h_thermo9();
            break;
        
        case 'thermo10':
            $app->h_thermo10();
            break;
            
        case 'thermo11':
            $app->h_thermo11();
            break;

        case 'thermo12':
            $app->h_thermo12();
            break;
            
        case 'thermo13':
            $app->h_thermo13();
            break;

        case 'thermo14':
            $app->h_thermo14();
            break;
        
        case 'thermo15':
            $app->h_thermo15();
            break;

        case 'thermo16':
            $app->h_thermo16();
            break;

        case 'thermo17':
            $app->h_thermo17();
            break;
            
        case 'thermo18':
            $app->h_thermo18();
            break;

        case 'thermo19':
            $app->h_thermo19();
            break;
        
        case 'thermo20':
            $app->h_thermo20();
            break;
            
        case 'thermo21':
            $app->h_thermo21();
            break;

        case 'thermo22':
            $app->h_thermo22();
            break;
            
        case 'thermo23':
            $app->h_thermo23();
            break;

        case 'thermo24':
            $app->h_thermo24();
            break;
        
        case 'thermo25':
            $app->h_thermo25();
            break;

        case 'thermo26':
            $app->h_thermo26();
            break;

        case 'thermo27':
            $app->h_thermo27();
            break;
            
        case 'thermo28':
            $app->h_thermo28();
            break;

        case 'thermo29':
            $app->h_thermo29();
            break;
        
        case 'thermo30':
            $app->h_thermo30();
            break;
            
        case 'thermo31':
            $app->h_thermo31();
            break;

        case 'thermo32':
            $app->h_thermo32();
            break;
            
        case 'thermo33':
            $app->h_thermo33();
            break;

        case 'thermo34':
            $app->h_thermo34();
            break;
        
        case 'thermo35':
            $app->h_thermo35();
            break;

        case 'thermo36':
            $app->h_thermo36();
            break;

        case 'thermo37':
            $app->h_thermo37();
            break;
            
        case 'thermo38':
            $app->h_thermo38();
            break;

        case 'thermo39':
            $app->h_thermo39();
            break;
        
        case 'thermo40':
            $app->h_thermo40();
            break;
            
        case 'thermo41':
            $app->h_thermo41();
            break;

        case 'thermo42':
            $app->h_thermo42();
            break;
            
        case 'thermo43':
            $app->h_thermo43();
            break;

        case 'thermo44':
            $app->h_thermo44();
            break;
        
        case 'thermo45':
            $app->h_thermo45();
            break;

        case 'thermo46':
            $app->h_thermo46();
            break;

        case 'thermo47':
            $app->h_thermo47();
            break;
            
        case 'thermo48':
            $app->h_thermo48();
            break;

        case 'thermo49':
            $app->h_thermo49();
            break;
        
        case 'thermo50':
            $app->h_thermo50();
            break;
            
        case 'thermo51':
            $app->h_thermo51();
            break;

        case 'thermo52':
            $app->h_thermo52();
            break;
            
        case 'thermo53':
            $app->h_thermo53();
            break;

        case 'thermo54':
            $app->h_thermo54();
            break;
        
        case 'thermo55':
            $app->h_thermo55();
            break;
    }
}else {
    $app->read_data();
}

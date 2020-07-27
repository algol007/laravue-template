<?php namespace App\Services;
class Date{
    public static function myDate($date){
        $mydate=substr($date,8,2);
        $month=Date::month(substr($date,5,2));
        $year=substr($date,0,4);
        return $mydate.' '.$month.' '.$year;
    }
    public static function fullDate($date){
        if($date==null){
            return "-";
        }else{
            $fulldate=explode(" ",$date);
            $mydate=substr($date,8,2);
            $month=Date::month(substr($date,5,2));
            $year=substr($date,0,4);
            return $month.' '.$mydate.', '.$year.', at '.$fulldate[1];
        }
    }
    public static function shortDate($date){
        if($date==null){
            return "-";
        }else{
            $fulldate=explode(" ",$date);
            $mydate=substr($date,8,2);
            $month=substr($date,5,2);
            $year=substr($date,0,4);
            return $mydate.'/'.$month.'/'.$year.', '.$fulldate[1];
        }
    }
    public static function countDown($date){
        $fulldate=explode(" ",$date);
        $mydate=substr($date,8,2);
        $month=substr($date,5,2);
        $year=substr($date,0,4);
        return $month.'/'.$mydate.'/'.$year.' '.$fulldate[1];
    }
    //Bulan
    public static function month($month){
        switch($month){
            case 1:
                return "January";
                break;
            case 2:
                return "February";
                break;
            case 3:
                return "March";
                break;
            case 4:
                return "April";
                break;
            case 5:
                return "May";
                break;
            case 6:
                return "June";
                break;
            case 7:
                return "July";
                break;
            case 8:
                return "August";
                break;
            case 9:
                return "September";
                break;
            case 10:
                return "October";
                break;
            case 11:
                return "November";
                break;
            case 12:
                return "December";
                break;
        }
    }

    //Hari
    public static function getDay($date){
        $week=array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
        $day=date("w");
        $now=$week[$day];
        return $now;
    }

    public static function getMonth($mydate)
    {
        $var     = explode(" ", $mydate);
        $full    = $var[0];
        $mydate = explode("-", $full);
        return Date::month($mydate[1]);
    }

    public static function latinFormat($month){
        switch($month){
            case 1:
            return "I";
            break;
            case 2:
            return "II";
            break;
            case 3:
            return "III";
            break;
            case 4:
            return "IV";
            break;
            case 5:
            return "V";
            break;
            case 6:
            return "VI";
            break;
            case 7:
            return "VII";
            break;
            case 8:
            return "VIII";
            break;
            case 9:
            return "IX";
            break;
            case 10:
            return "X";
            break;
            case 11:
            return "XI";
            break;
            case 12:
            return "XII";
            break;
        }
    }

}

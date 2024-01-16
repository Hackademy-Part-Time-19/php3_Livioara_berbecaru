<?php

class Company{
    public $name;
    public $location;
    public $tot_employees;
    static public $avg_wage = 1500;
    static public $companies_total;
    
    public function __construct($_name, $_location, $_tot_employees){
        $this->name = $_name;
        $this->location = $_location;
        $this->tot_employees = $_tot_employees;
    }
    //Stampa descrizione azienda
    function company_description(){
        $description = "L'azienda $this->name con sede in $this->location";
        if($this->tot_employees>0){
            $description = $description." ha ben $this->tot_employees dipendenti";
        }
        else{
            $description = $description." non ha dipendenti";
        }
        echo $description;
    }
    //Calcola e stampa spesa annuale azienda
    function annual_expense(){
        $annual_expense = $this->tot_employees*self::$avg_wage*12;
        echo "La spesa annuale per l'azienda $this->name è di $annual_expense euro";
        $this->companies_total($annual_expense);
    }

    //Somma variabile per spesa totale aziende
    function companies_total($_annual_expense){
        self::$companies_total+=$_annual_expense;
    }

    //Stampa variabile con somma spesa totale aziende
    static function print_companies_total(){
        echo "Il totale di tutte le aziende è ".self::$companies_total;
        self::$companies_total=0;
    }
}

//Istanzia aziende
$azienda1 = new Company("Ballarini","Italia",280);
$azienda2 = new Company("Davines", "Italia", 300);
$azienda3 = new Company("Autohome", "Italia", 80);
$azienda4 = new Company("Zwilling", "Germania", 200);
$azienda5 = new Company("Diageo ", "Scozia", 600);

//Stampa descrizione aziende
$azienda1->company_description();
$azienda2->company_description();
$azienda3->company_description();
$azienda4->company_description();
$azienda5->company_description();

//spesa annua aziende
$azienda1->annual_expense();
$azienda2->annual_expense();
$azienda3->annual_expense();
$azienda4->annual_expense();
$azienda5->annual_expense();

//totale spesa annua aziende
Company::print_companies_total();



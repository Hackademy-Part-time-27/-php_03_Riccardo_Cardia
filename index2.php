<?php
//traccia 2 

class Company
{
    public $name;
    public $location;
    public $tot_employees = 0;
    public $spesaPerDipendente;

    public $spesaTotaleAnnuale;

    public function __construct($name, $location, $tot, $spesaperdipendente)
    {
        $this->name = $name;
        $this->location = $location;
        $this->tot_employees = $tot;
        $this->spesaPerDipendente = $spesaperdipendente;
        $this->spesaTotaleAnnuale = ($tot * $spesaperdipendente);

    }

    public function Introduction()
    {
        if ($this->tot_employees > 0) {
            echo "L'Azienda $this->name con sede in $this->location ha ben $this->tot_employees dipendenti!!";
        } else {
            echo "L'Azienda $this->name con sede in $this->location non ha dipendenti! ";
        }
    }
    public static function printExpenses(array $companies)
    {
        foreach ($companies as $company) {
            echo "L'azienda $company->name ha avuto $company->spesaTotaleAnnuale € di spese!! \n";
        }
    }
    public static function sumOfExpenses(array $companies)
    {
        $sum = 0;
        foreach ($companies as $company) {
            $sum += $company->spesaTotaleAnnuale;
        }
        echo " La spesa annuale totale delle Aziende è di : $sum €!";
    }

}
$Aulab = new Company('Aulab', 'Italia', 50,50);
$Mercedes = new Company('Mercedes', 'Germania', 172000,100);
$Ferrari = new Company('Ferrari', 'Italia', 100000, 50);
$Google = new Company('Google', 'USA', 120000,1000);
$SuStampu = new Company('Su Stampu', 'Italia', 100, 50);

Company::printExpenses([$Aulab, $Mercedes, $Ferrari, $Google, $SuStampu]);
Company::sumOfExpenses([$Aulab, $Mercedes, $Ferrari, $Google, $SuStampu]);
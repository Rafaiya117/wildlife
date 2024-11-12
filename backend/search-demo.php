<?php

class Search{
    public $base_obj;


    public function __construct(){
        $this->base_obj = json_decode($this->base_json);
    
    }
    public string $base_json = '{
        "GetSpecies"{
        "id"  :"1",
        "Bangla_name"  :"মার্বেল কুনো ব্যাঙ",
        "English_Name"  :"Marbled Toad",
        "Scientific_name"  :"Bufo stomaticus",
        "Scientific_Ref"  :"Lütken, 1863",
        "Schedule"  :"Schedule 1",
        "part"  :"null",
        "Group"  :"Amphibia",
        "Subspecies"  :"null",
        "IUCN_Global"  :"Least Concern (LC)",
        "IUCN_National"  :"null",
        "CITES"  :"null",
        "Types"  :"Native",
        "Trade_for"  :"null",
        "FIELD15"  :"null"
        }
    }';
    




}


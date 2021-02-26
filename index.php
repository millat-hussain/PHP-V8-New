<?php

// php OOP Programing Language Update Version 8 

// Number 1 Topic named Arguments===


// function green(string $name, int|string $msg , ? string $emile="millat@gmail.com"){
//     return $name.','.$msg."\n".$emile;
// }

// echo green(
//     name: "Millat",
//     msg : "Hello php version 8",
//     emile : "millat.hussain@yeahoo.com"


// );


// Number 1 Topic named Arguments===

// constructor Property Promotion===

// php 7 version weay 
// class Persion{

//     public string $name;
//     public string $email;
//     public int $age;
//     public float $selery;
 

//     public function __construct(
//         string $namevv,
//         string $emilevv,
//         int $agevv,
//         float $seleryvv

//     ){

//         $this->name= $namevv;
//         $this->email= $emilevv;
//         $this->age= $agevv;
//         $this->selery= $seleryvv;
//     }
// }
// new Persion("millat","millat.hussain@yeahoo.com",1020,1020.320);

// php version 8 weay

// class Version8{


//     public function __construct(
//         public string $name,
//         public string $email,
//         public int $age,
//         public float $selery

//     ){

//     }
//     public function __toString(){

//         return $this->name." - ".$this->selery;

//     }






// }

// $pertion =new Version8("millat","millat.hussain@yeahoo.com",1020,1020.320);


// echo $pertion;



// constructor Property Promotion===



// union types ===


// function Version8union(int|string|float $data){


//     return $data."\n";


// }
// echo Version8union("millat");
// echo Version8union(1020);
// echo Version8union(10203.2010);

// union types ===


// Match Expration ===

// $day ="sunday";

// $rasult= match($day){

//     "saturday"=>strtoupper("Very Sunny"),
//     "sunday"  =>strtoupper("This is a very Cool Day"),
//     "thursday"=>strtoupper("This is real Day")




// };

// echo $rasult;

// Match Expration ===
// Null Safe Operatior===


// class Address{

//     public string $street;
//     public string $city;
//     public string $country;

// }{}

// class User{

//     public string $name;
//     public string|null $address;
// }{}

// class Session{

//     public function __construct(
//         public string $id,
//         public User $user

//     ){}
    
//     public function __toString(){

//         return  $this->id;


//     }

// };

// $session1 =new Session(
//     "sesson1",
//     new User(
//         "millat",
//         new Address(
//             "JamalpurShodor",
//             "Mymensingh",
//             "Bangladesh"
//         )
//     )
// );

// $session2 =new Session(
//     "dfdfd",
//     new User(
//         "sagorkhan",
//          null
//         )
//     );



// $country=null;

// $country = $session1?->user?->address?->country;

// echo $country;

// Null Safe Operatior===








?>
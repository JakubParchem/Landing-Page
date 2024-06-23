<?php
include "Product.php";
class Products
{
    private $product_list=[];
    public function __construct($lang){
        if($lang=="pl"){
            $this->product_list[]=new Product("Google Button","Google Button to niezwykle prosta i intuicyjna aplikacja zaprojektowana dla wszystkich,
             którzy chcą błyskawicznie uzyskać dostęp do najpopularniejszej wyszukiwarki internetowej -Google.
              Wystarczy jedno kliknięcie, aby przenieść się na stronę główną Google.com, gdzie można szybko rozpocząć przeszukiwanie internetu.",
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0Jns4Ibl9pld6e7pCtu7c5ISdFCiVDt6y3Q&s");
            $this->product_list[]=new Product("Cat Generator","Cat Generator to zabawna i prosta aplikacja stworzona dla wszystkich miłośników kotów.
             Jeśli potrzebujesz chwili radości lub po prostu chcesz zobaczyć urocze kocięta, ta aplikacja jest dla Ciebie.
             Za pomocą jednego kliknięcia wygenerujesz losowy obrazek kota, który poprawi Ci nastrój i wywoła uśmiech na Twojej twarzy.","https://www.creativefabrica.com/wp-content/uploads/2023/07/01/Kawaii-Cat-Flat-Icon-Vector-Cat-Icons-Graphics-73419457-2-580x387.jpg");
            $this->product_list[]=new Product("Prime Number Generator","Prime Number Generator to aplikacja stworzona dla entuzjastów matematyki i osób ceniących losowość.
             Aplikacja generuje losową liczbę pierwszą za każdym razem,
              gdy ją uruchamiasz. To idealne narzędzie do eksperymentowania z liczbami pierwszymi i sprawdzania swojej intuicji matematycznej.","https://media.geeksforgeeks.org/wp-content/uploads/20220817112023/Primenumbers.jpg");
        }
        else if ($lang=="en"){
            $this->product_list[]=new Product("Google Button","Google Button is an extremely simple and intuitive application designed for everyone who wants instant access to the world's most popular search engine – Google.
             With just one click, you can be transported to the Google.com homepage, ready to start your internet search right away.",
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0Jns4Ibl9pld6e7pCtu7c5ISdFCiVDt6y3Q&s");
            $this->product_list[]=new Product("Cat Generator","Cat Generator is a fun and simple application designed for all cat lovers.
             Whether you need a moment of joy or just want to see adorable kittens, this app is for you. With just one click,
             you can generate a random cat picture that will brighten your day and bring a smile to your face.","https://www.creativefabrica.com/wp-content/uploads/2023/07/01/Kawaii-Cat-Flat-Icon-Vector-Cat-Icons-Graphics-73419457-2-580x387.jpg");
            $this->product_list[]=new Product("Prime Number Generator","Prime Number Generator is an application designed for mathematics enthusiasts and those who appreciate randomness.
             The app generates a random prime number each time you launch it.
             It's a perfect tool for experimenting with prime numbers and testing your mathematical intuition.","https://media.geeksforgeeks.org/wp-content/uploads/20220817112023/Primenumbers.jpg");
        }
    }
    public function display(){
        echo "<div id='gallery'>";
        echo $this->product_list[0].$this->product_list[1].$this->product_list[2];
        echo "</div>";
    }
}

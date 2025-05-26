<?php

class Book {
    private $code_book;
    private $name;
    private $qty;

    // Constructor menjalankan setter (yang bersifat private)
    public function __construct($code_book, $name, $qty) {
        $this->setCodeBook($code_book);
        $this->name = $name;
        $this->setQty($qty);
    }

    // Getter untuk code_book
    public function getCodeBook() {
        return $this->code_book;
    }

    // Getter untuk qty
    public function getQty() {
        return $this->qty;
    }

    // Getter untuk name (tidak diminta tapi bisa berguna)
    public function getName() {
        return $this->name;
    }

    // Setter private untuk code_book
    private function setCodeBook($code_book) {
        if (preg_match("/^[A-Z]{2}[0-9]{2}$/", $code_book)) {
            $this->code_book = $code_book;
        } else {
            echo "Error: Format code_book harus berupa 2 huruf kapital diikuti 2 angka (contoh: BB00).<br>";
        }
    }

    // Setter private untuk qty
    private function setQty($qty) {
        if (is_int($qty) && $qty > 0) {
            $this->qty = $qty;
        } else {
            echo "Error: qty harus berupa bilangan bulat positif.<br>";
        }
    }
}

// Contoh penggunaan
$book1 = new Book("BB12", "Pemrograman PHP", 5);
echo "Kode Buku: " . $book1->getCodeBook() . "<br>";
echo "Nama Buku: " . $book1->getName() . "<br>";
echo "Jumlah: " . $book1->getQty() . "<br>";

// Contoh input salah
$book2 = new Book("1234", "Buku Salah", -3);

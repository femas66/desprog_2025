<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

function tampilkanMenuBertingkat(array $menu) {
    // Membuka tag list tidak berurut (ul)
    echo "<ul>";
    
    foreach ($menu as $item) {
        // Mencetak item menu utama
        echo "<li>{$item['nama']}";
        
        // Memeriksa apakah item memiliki subMenu
        if (isset($item['subMenu'])) {
            // Jika ada, panggil fungsi ini lagi (rekursif) 
            // dengan mengirim subMenu sebagai argumen
            tampilkanMenuBertingkat($item['subMenu']);
        }
        
        // Menutup tag list item (li)
        echo "</li>";
    }
    
    // Menutup tag list tidak berurut (ul)
    echo "</ul>";
}

// Memanggil fungsi untuk menampilkan menu utama
tampilkanMenuBertingkat($menu);
?>
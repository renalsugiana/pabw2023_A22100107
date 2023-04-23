<?php

function koneksi()
{
    return $conn = mysqli_connect('localhost', 'root', '', 'pabw_a22100107');
}

function query($query)
{
    $conn = koneksi();

    $result = mysqli_query($conn, $query);

    // Jika hasilnya hanya 1 data
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

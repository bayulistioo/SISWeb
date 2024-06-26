<?php
function formatRupiah($nominal)
{
  return "Rp " . number_format($nominal, 0, ',', '.');
}

function formatGelombang($gelombang)
{
  if ($gelombang == "I") {
    return "I (Satu)";
  } else if ($gelombang == "II") {
    return "II (Dua)";
  } else if ($gelombang == "III") {
    return "III (Tiga)";
  } else if ($gelombang == "IV") {
    return "IV (Empat)";
  } else if ($gelombang == "V") {
    return "V (Lima)";
  }
}

function formatSemester($item)
{
  return $item == "ganjil" ? "Ganjil (I)" : "Genap (II)";
}

function formatJenisSertifikasi($jenis)
{
  if ($jenis == "PSPL") {
    return "Pola PSPL";
  } else if ($jenis == "PF") {
    return "Pola PF";
  } else if ($jenis == "PLPG") {
    return "Pola PLPG";
  }
}

function formatNoTelpon($noTelpon)
{
  return "+62" . $noTelpon;
}

function setFormatKategoriTagihan($type)
{
  $paymentTypes = [
    "spp" => "SPP",
    "iuran" => "Iuran",
    "uts" => "UTS",
    "uas" => "UAS",
    "kursus" => "Kursus",
    "buku" => "Buku",
  ];
  return $paymentTypes[$type] ?? "Lainnya";
}

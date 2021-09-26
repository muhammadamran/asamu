<?php
class Home_model extends CI_Model {
    public function get_cashflow_deposit()
    {
        return $this->db->query("SELECT SUM(nominal_cashflow) AS total FROM tbl_cashflow WHERE tipe_cashflow='Deposit'")->result();
    }

    public function get_cashflow_pembayaran()
    {
        return $this->db->query("SELECT SUM(nominal_cashflow) AS total FROM tbl_cashflow WHERE tipe_cashflow='Pembayaran' OR tipe_cashflow='Penarikan'")->result();
    }

    public function get_cashflow()
    {
        return $this->db->query("SELECT * FROM tbl_cashflow ORDER BY id_cashflow DESC")->result();
    }

    public function cek_login($table,$data){      
        $query = $this->db->get_where($table,$data);

        if ($query->num_rows() == 1) {
            return $query->row();
        }else{
            return false;
        }
    }

    public function gettahun()
    {
        return $this->db->query("SELECT DISTINCT tgl_sk_lulus FROM simak_mst_mahasiswa WHERE tgl_sk_lulus != '' AND tgl_sk_lulus != '0000-00-00' ORDER BY tgl_sk_lulus DESC LIMIT 5")->result();
    }

    public function get_table_pujian($angkatan)
    {
        $result = $this->db->query(" SELECT ProdiID, nama, pujian, sangatmemuaskan, memuaskan, tt,
            @tot:= pujian + sangatMemuaskan + Memuaskan + tt as tot
            FROM 
            ( SELECT DISTINCT 
            sum(a.ipk > '3.50') as pujian, 
            sum(a.IPK >= '3.01' AND a.IPK < '3.51') as sangatMemuaskan,
            sum(a.ipk > '2.75' AND a.ipk <= '3.00') as Memuaskan,
            sum(a.ipk >= '0.00' AND a.ipk <= '2.75') as tt, 
            a.ProdiID, b.nama
            FROM simak_mst_mahasiswa as a
            JOIN simak_mst_prodi as b ON a.ProdiID=b.ProdiID
            WHERE a.tgl_sk_lulus LIKE '%$angkatan%' AND a.StatusMhswID = 'L'
            GROUP BY a.ProdiID, b.Nama
            ORDER BY b.nama) a ");

        return $result;
    }

    public function detail_pujian($prodi, $angkatan){
        return $this->db->query("SELECT a.ProdiID, b.nama, a.Nama as Mahasiswa, a.MhswID, a.ipk
        FROM simak_mst_mahasiswa as a
        JOIN simak_mst_prodi as b ON a.ProdiID=b.ProdiID
        WHERE a.tgl_sk_lulus LIKE '%$angkatan%' AND a.ProdiID = '$prodi' AND a.ipk > '3.50' AND a.StatusMhswID = 'L'
        ORDER BY a.ipk DESC")->result();
    }

    public function detail_sm($prodi, $angkatan){
        return $this->db->query("SELECT a.ProdiID, b.nama, a.Nama as Mahasiswa, a.MhswID, a.ipk
        FROM simak_mst_mahasiswa as a
        JOIN simak_mst_prodi as b ON a.ProdiID=b.ProdiID
        WHERE a.tgl_sk_lulus LIKE '%$angkatan%' AND a.ProdiID = '$prodi' AND (a.IPK >= '3.01' AND a.IPK < '3.51') AND a.StatusMhswID = 'L'
        ORDER BY a.ipk DESC")->result();
    }

    public function detail_m($prodi, $angkatan){
        return $this->db->query("SELECT a.ProdiID, b.nama, a.Nama as Mahasiswa, a.MhswID, a.ipk
        FROM simak_mst_mahasiswa as a
        JOIN simak_mst_prodi as b ON a.ProdiID=b.ProdiID
        WHERE a.tgl_sk_lulus LIKE '%$angkatan%' AND a.ProdiID = '$prodi' AND (a.ipk > '2.75' AND a.ipk <= '3.00') AND a.StatusMhswID = 'L'
        ORDER BY a.ipk DESC")->result();
    }

    public function detail_tt($prodi, $angkatan){
        return $this->db->query("SELECT a.ProdiID,  b.nama, a.Nama as Mahasiswa, a.MhswID, a.ipk
        FROM simak_mst_mahasiswa as a
        JOIN simak_mst_prodi as b ON a.ProdiID=b.ProdiID
        WHERE a.tgl_sk_lulus LIKE '%$angkatan%' AND a.ProdiID = '$prodi' AND (a.ipk >= '0.00' AND a.ipk <= '2.75') AND a.StatusMhswID = 'L'
        ORDER BY a.ipk DESC")->result();
    }

    public function detail_total($prodi, $angkatan){
        return $this->db->query("SELECT a.ProdiID,  b.nama, a.Nama as Mahasiswa, a.MhswID, a.ipk
        FROM simak_mst_mahasiswa as a
        JOIN simak_mst_prodi as b ON a.ProdiID=b.ProdiID
        WHERE a.tgl_sk_lulus LIKE '%$angkatan%' AND a.ProdiID = '$prodi' AND a.StatusMhswID = 'L'
        ORDER BY a.ipk DESC")->result();
    }

    public function get_table_pujian2($angkatan)
    {

        $result = $this->db->query(" SELECT ProdiID, nama, laki, perempuan, pujian, nonpujian
            FROM 
            ( SELECT DISTINCT
            sum(a.ipk > '3.50' AND a.kelamin = 'L') as laki,
            sum(a.ipk > '3.50' AND a.kelamin = 'P') as perempuan, 
            sum(a.ipk > '3.50') as pujian, 
            sum(a.IPK >= '0.00' AND a.IPK < '3.51') as nonpujian, 
            a.ProdiID, b.nama
            FROM simak_mst_mahasiswa as a
            JOIN simak_mst_prodi as b ON a.ProdiID=b.ProdiID
            WHERE a.tgl_sk_lulus LIKE '%$angkatan%' AND a.StatusMhswID = 'L'
            GROUP BY a.ProdiID, b.Nama
            ORDER BY b.nama
        ) a ");

        return $result;
    }

    public function graphmax($angkatan)
    {
        return $this->db->query("SELECT ProdiID, nama, max
            FROM 
            ( SELECT DISTINCT 
            max(a.ipk) as max,
            a.ProdiID,  b.nama
            FROM simak_mst_mahasiswa as a
            JOIN simak_mst_prodi as b ON a.ProdiID=b.ProdiID
            WHERE a.tgl_sk_lulus LIKE '$angkatan' AND a.StatusMhswID = 'L'
            GROUP BY a.ProdiID, b.Nama
            ORDER BY b.nama
        ) a")->result();
    }

    public function graphmin($angkatan)
    {
        return $this->db->query("SELECT ProdiID, nama, min
            FROM 
            ( SELECT DISTINCT 
            min(a.ipk) as min,
            a.ProdiID,  b.nama
            FROM simak_mst_mahasiswa as a
            JOIN simak_mst_prodi as b ON a.ProdiID=b.ProdiID
            WHERE a.tgl_sk_lulus LIKE '$angkatan' AND a.StatusMhswID = 'L'
            GROUP BY a.ProdiID, b.Nama
            ORDER BY b.nama
        ) a")->result();
    }

    public function graphrata($angkatan)
    {
        return $this->db->query("SELECT ProdiID,  nama, @rataa := round(rata,2) as rata_rata
            FROM 
            ( SELECT DISTINCT 
            avg(a.ipk) as rata,
            a.ProdiID, b.nama
            FROM simak_mst_mahasiswa as a
            JOIN simak_mst_prodi as b ON a.ProdiID=b.ProdiID
            WHERE a.tgl_sk_lulus LIKE '$angkatan' AND a.StatusMhswID = 'L'
            GROUP BY a.ProdiID, b.Nama
            ORDER BY b.nama
        ) a")->result();
    }

    public function graphaktivitas($angkatan)
    {
        return $this->db->query("SELECT ProdiID, nama, 
            jumlah, total,
            @produktivitas:= round(jumlah / total * 100,2) as produktivitas
            FROM 
            ( SELECT DISTINCT
            sum(a.StatusMhswID = 'L') as jumlah,
            count(a.ProdiID) as total,
            a.ProdiID, b.nama
            FROM simak_mst_mahasiswa as a
            JOIN simak_mst_prodi as b ON a.ProdiID=b.ProdiID
            WHERE a.tgl_sk_lulus LIKE '$angkatan'
            GROUP BY a.ProdiID, b.Nama
            ORDER BY b.nama
        ) a
        ")->result();
    }

    public function table_presentase($angkatan)
    {
        return $this->db->query("SELECT ProdiID, nama, 
            max,min,
            @rataa := round(rata,2) as rata_rata,
            pujian, @pp:= round(pujian / jumlah * 100,2) as pp,
            sangatmemuaskan, @sp:= round(sangatmemuaskan / jumlah * 100,2) as sp,
            memuaskan, @mp:= round(memuaskan / jumlah * 100,2) as mp,
            tt, @tp:= round(tt / jumlah * 100,2) as tp,
            jumlah
            FROM 
            ( SELECT DISTINCT
            max(a.ipk) as max,
            min(a.ipk) as min,
            avg(a.ipk) as rata,
            sum(a.ipk > '3.50') as pujian, 
            sum(a.ipk >= '3.01' AND a.ipk < '3.51') as sangatMemuaskan,
            sum(a.ipk > '2.75' AND a.ipk <= '3.00') as Memuaskan,
            sum(a.ipk >= '0.00' AND a.ipk <= '2.75') as tt,
            sum(a.StatusMhswID = 'L') as jumlah,
            a.ProdiID,  b.nama
            FROM simak_mst_mahasiswa as a
            JOIN simak_mst_prodi as b ON a.ProdiID=b.ProdiID
            WHERE a.tgl_sk_lulus LIKE '%$angkatan%' AND StatusMhswID = 'L' 
            GROUP BY a.ProdiID, b.Nama
            ORDER BY b.nama
        ) a
        ")->result();
    }

    public function table_produktivitas($angkatan)
    {
        return $this->db->query("SELECT ProdiID, nama, 
            jumlah, total,
            @produktivitas:= round(jumlah / total * 100,2) as produktivitas
            FROM 
            ( SELECT DISTINCT
            sum(a.StatusMhswID = 'L') as jumlah,
            count(a.ProdiID) as total,
            a.ProdiID, b.nama
            FROM simak_mst_mahasiswa as a
            JOIN simak_mst_prodi as b ON a.ProdiID=b.ProdiID
            WHERE a.tgl_sk_lulus LIKE '%$angkatan%'
            GROUP BY a.ProdiID, b.Nama
            ORDER BY b.nama
        ) a
        ")->result();
    }

}
?>
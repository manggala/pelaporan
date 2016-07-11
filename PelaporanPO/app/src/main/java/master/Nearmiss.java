package master;

/**
 * Created by Ahmad Mustofa on 05/07/2016.
 */
public class Nearmiss {
    String tanggal,lokasi,saksi,kerjaan,tahapan,penyebab,penjelasan,foto1,foto2;

    public Nearmiss(String tanggal, String lokasi, String saksi, String kerjaan, String tahapan, String penyebab, String penjelasan, String foto1, String foto2) {
        this.tanggal = tanggal;
        this.lokasi = lokasi;
        this.saksi = saksi;
        this.kerjaan = kerjaan;
        this.tahapan = tahapan;
        this.penyebab = penyebab;
        this.penjelasan = penjelasan;
        this.foto1 = foto1;
        this.foto2 = foto2;
    }

    public String getTanggal() {
        return tanggal;
    }

    public void setTanggal(String tanggal) {
        this.tanggal = tanggal;
    }

    public String getLokasi() {
        return lokasi;
    }

    public void setLokasi(String lokasi) {
        this.lokasi = lokasi;
    }

    public String getSaksi() {
        return saksi;
    }

    public void setSaksi(String saksi) {
        this.saksi = saksi;
    }

    public String getKerjaan() {
        return kerjaan;
    }

    public void setKerjaan(String kerjaan) {
        this.kerjaan = kerjaan;
    }

    public String getTahapan() {
        return tahapan;
    }

    public void setTahapan(String tahapan) {
        this.tahapan = tahapan;
    }

    public String getPenyebab() {
        return penyebab;
    }

    public void setPenyebab(String penyebab) {
        this.penyebab = penyebab;
    }

    public String getPenjelasan() {
        return penjelasan;
    }

    public void setPenjelasan(String penjelasan) {
        this.penjelasan = penjelasan;
    }

    public String getFoto1() {
        return foto1;
    }

    public void setFoto1(String foto1) {
        this.foto1 = foto1;
    }

    public String getFoto2() {
        return foto2;
    }

    public void setFoto2(String foto2) {
        this.foto2 = foto2;
    }
}
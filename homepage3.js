document.addEventListener("DOMContentLoaded", function() {
    const backgrounds = ["profil dan background/Jooo5.jpg", "profil dan background/Joooo4.jpg", "profil dan background/DSC00003.JPG"];
    let currentBgIndex = 0;
    const backgroundContainer = document.body;

    function changeBackground() {
        backgroundContainer.style.backgroundImage = `url('${backgrounds[currentBgIndex]}')`;
        currentBgIndex = (currentBgIndex + 1) % backgrounds.length;
    }

    setInterval(changeBackground, 2000); // Ganti gambar setiap 3 detik
});
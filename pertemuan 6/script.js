const btn = document.getElementById("darkModeBtn");

btn.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");

    if (document.body.classList.contains("dark-mode")) {
        btn.textContent = "☀️";
    } else {
        btn.textContent = "🌙";
    }
});
const isiFakta = document.querySelector("#isi-fakta");
const btnRefresh = document.querySelector("#btnRefresh");

async function ambilFakta() {
    isiFakta.textContent = "⏳ Memuat fakta...";

    try {
        const response = await fetch("https://catfact.ninja/fact");

        if (!response.ok) {
            throw new Error("HTTP Error: " + response.status);
        }

        const data = await response.json();

        isiFakta.textContent = data.fact;

    } catch (error) {
        isiFakta.textContent = "⚠️ Gagal memuat fakta.";
    }
}

ambilFakta();

btnRefresh.addEventListener("click", ambilFakta);

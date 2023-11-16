let body = document.getElementById("body");
const icon = document.getElementById("icon");
function toggleDarkMode() {
    body.classList.toggle("darkMode")
    if (body.classList.contains("darkMode")) {
        icon.className = "fas fa-sun"
    } else {
        icon.className = "fas fa-moon"
    }
}

// Dummy data (contoh data hotel)
const hotels = [
    "The Hotel",
    "Hotel Mesra Indah",
    "Hotel Firaun",
    "Sultan Guest House",
    "FWB Guest House",
    "Radja Hotel",
    // ...
];

function liveSearch() {
    const input = document.getElementById("searchInput");
    const filter = input.value.toUpperCase();
    const resultsContainer = document.getElementById("searchResults");
    resultsContainer.innerHTML = ""; // Membersihkan hasil sebelumnya

    for (let i = 0; i < hotels.length; i++) {
        const hotelName = hotels[i].toUpperCase();
        if (hotelName.includes(filter)) {
            const listItem = document.createElement("li");
            listItem.textContent = hotels[i];
            resultsContainer.appendChild(listItem);
        }
    }
}

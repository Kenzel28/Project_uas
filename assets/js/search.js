$(document).ready(function () {
    console.log("JavaScript file loaded successfully.");

    function updateSearchResultsView(results) {
        const searchResultsContainer = document.getElementById('searchResultsContainer');
        if (!searchResultsContainer) {
            console.error("Container hasil pencarian tidak ditemukan.");
            return;
        }

        searchResultsContainer.innerHTML = '';

        if (results.length === 0) {
            searchResultsContainer.innerHTML = '<p class="text-center">Tidak ada hasil yang ditemukan.</p>';
            return;
        }

        results.forEach(item => {
            const card = `
                <div class="col-6 col-md-3 mb-3">
                    <div class="card">
                        <img src="${item.image}" class="card-img-top" alt="${item.name}">
                        <div class="card-body">
                            <h5 class="card-title">${item.name}</h5>
                            <a href="${item.link}" class="btn btn-primary">Lihat Resep</a>
                        </div>
                    </div>
                </div>`;
            searchResultsContainer.insertAdjacentHTML('beforeend', card);
        });
    }

    // Fungsi pencarian
    $('#searchBar').on('keypress', function (e) {
        if (e.key === 'Enter') {
            const query = $(this).val().toLowerCase().trim();
            console.log("Query pencarian:", query);

            if (!query) {
                alert('Masukkan kata kunci untuk mencari.');
                return;
            }

            const results = [];
            const cards = document.querySelectorAll('.card');

            cards.forEach(card => {
                const titleElement = card.querySelector('.card-title');
                const imageElement = card.querySelector('img');
                const linkElement = card.querySelector('a');

                if (!titleElement || !imageElement || !linkElement) {
                    console.error("Elemen kartu tidak lengkap.");
                    return;
                }

                const title = titleElement.textContent.toLowerCase();
                if (title.includes(query)) {
                    results.push({
                        id: card.dataset.id || '',
                        name: titleElement.textContent,
                        image: imageElement.src,
                        link: linkElement.href,
                    });
                }
            });

            updateSearchResultsView(results);

            if (results.length > 0) {
                console.log("Hasil pencarian ditemukan:", results);
                $('#searchResultsSection').show();
                $('#mainContentSection').hide();
            } else {
                console.log("Tidak ada hasil yang ditemukan.");
                $('#searchResultsSection').show();
                $('#mainContentSection').hide();
            }
        }
    });
});

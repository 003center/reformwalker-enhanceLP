/*施工事例の写真チェンジ */
function changeImage(newSrc) {
    const mainImg = document.getElementById("main-img");
    mainImg.src = newSrc;
  }

/*ページ内リンクの時にメニューが消えるように */
function checkMenuCheckbox() {
  document.getElementById("menu-btn-check").checked = false;
}
/*施工会社一覧絞り込み */
document.addEventListener('DOMContentLoaded', function() {
  const searchInput = document.getElementById('search-input');
  const companyContents = document.querySelectorAll('.archive-company-content');
  const tabButtons = document.querySelectorAll('.tab-button');

  // タブボタンのクリックイベントを追加
  tabButtons.forEach(function(button) {
      button.addEventListener('click', function() {
          const selectedRegion = this.getAttribute('data-region');

          companyContents.forEach(function(content) {
              const regionText = content.querySelector('.archive-company-region').textContent;

              if (selectedRegion === 'all' || regionText.includes(selectedRegion)) {
                  content.style.display = 'block';
              } else {
                  content.style.display = 'none';
              }
          });
      });
  });

  // 検索欄のイベントを変更
  searchInput.addEventListener('input', function() {
      const searchTerm = this.value.toLowerCase().trim();

      companyContents.forEach(function(content) {
          const regionText = content.querySelector('.archive-company-region').textContent.toLowerCase();

          if (regionText.includes(searchTerm)) {
              content.style.display = 'block';
          } else {
              content.style.display = 'none';
          }
      });
  });
});



/*施工事例の会社絞り込み */
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-input2');
    const companyContents = document.querySelectorAll('.tab_content-item');
    const tabButtons = document.querySelectorAll('.tab-button2');
  
    // タブボタンのクリックイベントを追加
    tabButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const selectedRegion = this.getAttribute('data-region');
  
            companyContents.forEach(function(content) {
                const regionText = content.querySelector('.sekou-company').textContent;
  
                if (selectedRegion === 'all' || regionText.includes(selectedRegion)) {
                    content.style.display = 'block';
                } else {
                    content.style.display = 'none';
                }
            });
        });
    });
  
    // 検索欄のイベントを変更
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase().trim();
  
        companyContents.forEach(function(content) {
            const regionText = content.querySelector('.sekou-company').textContent.toLowerCase();
  
            if (regionText.includes(searchTerm)) {
                content.style.display = 'block';
            } else {
                content.style.display = 'none';
            }
        });
    });
  });
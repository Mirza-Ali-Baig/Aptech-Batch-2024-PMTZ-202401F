
<script>
    const  popups = document.querySelectorAll('.popup-container');
    popups.forEach(popup => {
        const closeBtn = popup.querySelector('.close-btn');
        closeBtn.addEventListener('click', () => {
            popup.classList.remove('active');
        });
        popup.addEventListener('click', e => {
            if (e.target === popup) {
                popup.classList.remove('active');
            }
        });
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') {
                popup.classList.remove('active');
            }
        });
    });
    function  openPopup(popup) {
        popups.forEach(p => {
            p.classList.remove('active');
        });
        popup.classList.add('active');
    }
    const openPopupsButtons = document.querySelectorAll('.login-btn,.signup-btn,.forgot-password-btn');
    openPopupsButtons.forEach((button,i) => {
        button.addEventListener('click', () => {
            openPopup(popups[i]);
        });
    });
</script>
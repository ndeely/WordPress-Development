window.addEventListener('scroll', showBlocks);
window.addEventListener('scroll', pulse);

showBlocks();

function showBlocks() {
    const blocks = document.querySelectorAll('.block');

    const triggerBottom = window.innerHeight * 0.8;

    blocks.forEach(block => {
        const blockTop = block.getBoundingClientRect().top;

        if (blockTop < triggerBottom) {
            block.classList.add('show');
        } else {
            block.classList.remove('show');
        }
    });
}

function pulse() {
    const buttons = document.querySelectorAll('.pulse');

    const triggerBottom = window.innerHeight * 0.8;

    buttons.forEach(button => {
        const buttonTop = button.getBoundingClientRect().top;

        if (buttonTop < triggerBottom) {
            button.classList.add('active');
        } else {
            button.classList.remove('active');
        }
    })
}
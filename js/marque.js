window.onload = () => {
    const marque = document.querySelector('.marque');
    if (marque) {
        const marques = new Array(40).fill(null);
        marques.forEach(el => {
            marque.parentNode.append(marque.cloneNode(true));
        })
    }
}
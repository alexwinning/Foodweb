document.querySelectorAll('.drop-zone__input').forEach(inputElement => {
    const dropZoneElement = inputElement.closest('.drop-zone');

    function handleDragStart(e) {
        this.style.opacity = '0';
        e.dataTransfer.setData('text', e.target.id);
    }

    function handleDragEnd(e) {
        this.style.opacity = '1';
    }

    function allowDrop(e) {
        e.preventDefault();
    }

    let items = document.querySelectorAll('.imgs');
    items.forEach(function (item) {
        item.addEventListener('dragstart', handleDragStart);
        item.addEventListener('dragend', handleDragEnd);
    });

    dropZoneElement.addEventListener('dragover', e => {
        e.preventDefault();
        dropZoneElement.classList.add('drop-zone--over');
    });

    ['dragleave', 'dragend'].forEach(type => {
        dropZoneElement.addEventListener(type, e => {
            dropZoneElement.classList.remove('drop-zone--over');
        });
    });
    let selectedFoods = "";
    const addSelection = (e) => {
        selectedFoods += e.dataTransfer.getData('text/plain') + " ";
        document.cookie = "selection=" + selectedFoods;
    }

    dropZoneElement.addEventListener('drop', e => {
        e.preventDefault();
        dropZoneElement.classList.remove('drop-zone--over');
        const id = e.dataTransfer.getData('text/plain');
        const output = document.getElementById(id);
        var add = e.dataTransfer.getData('text');
        e.target.appendChild(document.getElementById(add));
        console.log(id);
        addSelection(e);
    });
});

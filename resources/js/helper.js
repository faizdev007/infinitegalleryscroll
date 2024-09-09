function singlegalleryimg(item){
    const div = document.createElement('div');
    div.classList.add(`gallery-item`);
    div.classList.add(`w-full`);
    div.classList.add(`h-64`);
    div.classList.add(`bg-gray-200`);
    div.classList.add(`hover:rounded-lg`);
    div.classList.add(`rounded-lg`);
    div.innerHTML = `
    <div class="hidden hover:flex absolute top-0 rounded-t-lg w-full p-2 bg-black bg-opacity-50 text-white text-sm">
        user
    </div>
    <img src="${item.image_path}" class="w-full h-full object-cover hover:rounded rounded-lg" alt="${item.title}">
    <div class="hidden hover:block absolute bottom-0 left-0 w-full rounded-b-lg p-2 bg-black bg-opacity-50 text-white text-sm">
        Image description
    </div>
    `;

    return div;
}

window.singlegalleryimg = singlegalleryimg;
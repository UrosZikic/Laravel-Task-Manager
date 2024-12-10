const header_info = Array.from(document.querySelector(".header-info").children);
const header_title = document.querySelector(".header-title");

// for (item of header_info) {
//     console.log(header_info.findIndex(item));
//     setInterval(appendInfo(item), 300);
// }

function appendInfo(index) {
    return header_info[index].classList.add("reveal-header-info");
}

setTimeout(() => header_title.classList.add("reveal-header-info"), 100);

header_info.forEach((item) => {
    const index = header_info.indexOf(item);

    if (parseInt(index) < parseInt(header_info.length)) {
        setTimeout(() => {
            appendInfo(index);
        }, index * 300);
    }
});

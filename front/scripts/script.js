function togglePasswordVisibility(id) {
    if (document.getElementById(id).type === 'password') {
        document.getElementById(id).setAttribute('type','text');
    } else {
        document.getElementById(id).setAttribute('type','password');
    }
}

function toggleFilters(id) {
    let elem = document.getElementById(id);
    if (elem.style.display === 'block') {
        elem.style.display = 'none';
    } else {
        elem.style.display = 'block';
    }
}
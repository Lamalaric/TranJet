function togglePasswordVisibility(id) {
    if (document.getElementById(id).type === 'password') {
        document.getElementById(id).setAttribute('type','text');
    } else {
        document.getElementById(id).setAttribute('type','password');
    }
}
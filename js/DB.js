class DB {
    static getData(){
        return new Promise((resolve, reject) => {
            let xml = new XMLHttpRequest();

            xml.open('get', 'get_all_data.php');
            xml.onreadystatechange = function () {
                if (xml.readyState === 4 && xml.status === 200) {
                    resolve(JSON.parse(xml.responseText));
                }
            }
            xml.send();
        });
    }

    static findStudent(email){
        let fakeForm = new FormData();
        fakeForm.append('email', email);
        return new Promise((resolve, reject) => {
            let xml = new XMLHttpRequest();
            xml.open('post','find_student.php');
            xml.onreadystatechange = function () {
                if (xml.readyState === 4 && xml.status === 200) {
                    resolve(JSON.parse(xml.responseText));
                }
            }
            xml.send(fakeForm);
        });
    }
}
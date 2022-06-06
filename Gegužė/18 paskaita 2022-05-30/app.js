function showMsg(message = null) {
    if (message) {
    console.log(new Date, message)
    }else{
        console.error('No message');
    }
};
const user = {
    name: 'Edgaras',
    age: 27
};
function getUser() {
    return user;
};
function getUserName() {
    return getUser().name
};
function setUserName(user, name) {
    user.name = name;
    return true;
};
function getDefaultPhone(){
    return 112;
};
function setUserParameter(user, parameterName, parameterValue = getDefaultPhone()) {
    user[parameterName] = parameterValue;
    return true;
};

showMsg();
showMsg(`Hello, my name is ${getUser().name}`);
showMsg(`Hello, my name is ${getUser().name}, my age is ${getUser().age}`);
showMsg(`Hello, my name is ${getUserName()}`);

setUserName(getUser(), 'Tomas');
showMsg(`Hello, my name is ${getUserName()}`);

let randomUser = getUser();

setUserName(randomUser, 'Antanas');
showMsg(`Hello, my name is ${getUserName()}`);

setUserParameter(randomUser, 'city', 'Kaunas');
setUserParameter(randomUser, 'country', 'LTU');
setUserParameter(randomUser, 'phone');
console.log(getUser());
function uncamelizeStr(text) {
    var separator = " ";
    // Replace all the capital letters by the seperator followed by lowercase
    var text = text.replace(/[A-Z]/g, function(letter){
        return separator + letter.toLowerCase();
    });
    // Remove first seperator (to avoid space before the string)
    return text.replace("/^ " + seperator + "/", '');
}
console.log("The uncamelized string is:", (uncamelizeStr("helloModiJi")))
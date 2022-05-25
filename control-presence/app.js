function control_presence() {
    var presence = typeof(document.getElementById("presence").checked);
    var date = document.getElementById("date").value;
    
    console.log(`${presence} typeof and ${date} type of it... `);
}
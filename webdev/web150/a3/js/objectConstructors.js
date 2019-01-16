// Class Object
function Class(name, room, capacity, studentNumber) {
    this.name = name;
    this.room = room;
    this.capacity = capacity;
    this.studentNumber = studentNumber;
    this.checkAvailability = function(){
        return this.capacity - this.studentNumber;
    };
}

// Check Waitlist
function checkWailist(classDetail, num) {
    if (num < 0){
        return classDetail+='Waitlist: ' + Math.abs(num) + '<br';
    }
    return classDetail+='Availability: ' + num + '<br';
}

// Create 3 objects
var physicClass_1 = new Class('Physics I', 'BE3167', 30, 25);
var physicClass_2 = new Class('Physics II', 'BE3168', 30, 15);
var cscClass = new Class('Computer Science', 'BE3169', 30, 35);

// Update Class Schedule
// Physic Class I
var class_1_detail = physicClass_1.name + '<br>'+ 
                    'Room: ' + physicClass_1.room + '<br>' + 
                    'Capacity: ' + physicClass_1.capacity + '<br>';
    class_1_detail = checkWailist(class_1_detail, physicClass_1.checkAvailability());

var elClass_1 = document.getElementById('class_1');
    elClass_1.innerHTML=class_1_detail;

// Physic Class II
var class_2_detail = physicClass_2.name + '<br>'+ 
                    'Room: ' + physicClass_2.room + '<br>' +
                    'Capacity: ' + physicClass_2.capacity + '<br>';
    class_2_detail = checkWailist(class_2_detail, physicClass_2.checkAvailability());

var elClass_2 = document.getElementById('class_2');
    elClass_2.innerHTML=class_2_detail;

// Computer Science
var class_3_detail = cscClass.name + '<br>'+ 
                    'Room: ' + cscClass.room + '<br>'+
                    'Capacity: ' + cscClass.capacity + '<br>';
    class_3_detail = checkWailist(class_3_detail, cscClass.checkAvailability());

var elClass_3 = document.getElementById('class_3');
    elClass_3.innerHTML=class_3_detail;


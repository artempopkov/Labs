//z1
function t1(){
    obj = {a: 1, b: 2, c: 3};
    alert('Задание1: ' + obj['c'] + '  ' + obj.c)
}


//z2
function t2() {
    var obj = {Коля: '1000', Вася: '500', Петя: '200'};
    alert('Задание 2: Зарплата Коли: ' + obj["Коля"] + 'руб, зарплата Пети: ' + obj['Петя'])

}

//z3
function t3() {
    week = {Первый: 'понедельник', Второй: 'вторник', Третий: 'среда', Четвёртый: 'четверг', Пятый: 'пятница', Шестой: 'суббота', Седьмой: 'воскресенье'};
    alert('Задание 3: ' + week['Пятый']);
    
}

//z4
function t4() {
    week = {1: 'понедельник', 2: 'вторник', 3: 'среда', 4: 'четверг', 5: 'пятница', 6: 'суббота', 7: 'воскресенье'};
    let day = 3 
    alert('Задание 4:  ' + week[3]);    
}

$( function() {
    $( document ).tooltip();
  } );



//z1
$(document).ready(function(){
    $("#a1").click(function(){
        obj = {a: 1, b: 2, c: 3};
        $("#sp1").text('Задание1: ' + obj['c'] + '  ' + obj.c)
        return false;
    })
})

//z2
$(document).ready(function(){
    $("#a2").click(function(){
        var obj = {Коля: '1000', Вася: '500', Петя: '200'};
        $("#sp1").text('Задание 2: Зарплата Коли: ' + obj["Коля"] + 'руб, зарплата Пети: ' + obj['Петя'])
        return false;
    })
})



//z3
$(document).ready(function(){
    $("#a3").click(function(){
        week = {Первый: 'понедельник', Второй: 'вторник', Третий: 'среда', Четвёртый: 'четверг', Пятый: 'пятница', Шестой: 'суббота', Седьмой: 'воскресенье'};
        $("#sp1").text('Задание 3: ' + week['Второй'])
        return false;
    })
})

//z4
$(document).ready(function(){
    $("#a4").click(function(){
        week = {1: 'понедельник', 2: 'вторник', 3: 'среда', 4: 'четверг', 5: 'пятница', 6: 'суббота', 7: 'воскресенье'};
        let day = 3 
        $("#sp1").text('Задание 4:  ' + week[3])
        return false;
    })
})





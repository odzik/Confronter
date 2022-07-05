var prawidlowaOdpowiedz;
var numerPytania = 0;
var wynik = 0;
var bledneOdpowiedzi = 0;
var imie;
$(document).ready(function () {
    //button start clicked
    $("#start").on('click', function () {
        imie = prompt("Jak masz na imie?");
        $("#score table tbody tr:nth-child(1) td").text(imie);
        if(imie === null || imie == "" ){
            alert("Nie podano imienia, wprowadź imie aby zagrać");
        }
        else{
            $("#logo").removeClass("d-flex");
            $("#logo").addClass("d-none");
            KolejnePytanie();
        }

    });

    $("#sprawdz").on('click', function(){

        imie = TakeUserName();
        var dataOd = TakeDataFrom();
        var dataDo = TakeDataTo();
        $("#score table tbody").empty();
        $.post('php/GetScore.php', {
            Imie: imie,
            Bledy: bledneOdpowiedzi,
            DataOd: dataOd,
            DataDo: dataDo
        }, function (data) {
            if(data.length > 0){
                for(i=0;i<=data.length-1;i++){
                    $("#score table tbody").append('<tr><td>' + (i + 1) + '</td><td>' + data[i]['Imie'] + '</td><td>' + data[i]['Wynik'] + '</td><td>' + data[i]['Bledy'] + '</td><td>' + data[i]['Data'] + '</td></tr>');
                }
            }
            else
                alert(data);
            

        }, "json");
    });

    function TakeDataFrom(){
        return $("#dateFrom").val();
    }

    function TakeDataTo(){
        return $("#dateTo").val();
    }

    function TakeUserName(){
        return $("#name").val();
    }

    //function start of application
    function KolejnePytanie() {
        //appearing of score table and task questions
        $("#task").addClass("d-block");
        $("#score").addClass("d-flex");
        $("#start").addClass("invisible");

        //when we have some amount of answer giving us score
        if (numerPytania == 5) {
            

            $.post('php/ScoreRegister.php', {
                Wynik: wynik,
                Bledy: bledneOdpowiedzi,
                Imie: imie
            }, function (data) {
                if(data == 1)
                alert(data);
                else
                alert(data);
            });

            $("#score table tbody tr:nth-child(2) td").text(0);
            $("#score table tbody tr:nth-child(3) td").text(0);
            $("#task").addClass("d-none");
            $("#score").addClass("d-none");
            $("#task").removeClass("d-block");
            $("#score").removeClass("d-flex");
            $("#start").removeClass("invisible");
            $("#logo").removeClass("d-none");
            $("#logo").addClass("d-flex");
            wynik = 0;
            bledneOdpowiedzi = 0;
            numerPytania = 0;
        }

        //math random of numbers from 0 to 11
        let x1 = Math.floor(Math.random() * 11);

        //unique 4 numbers from number 0 to 11
        var arr = []
        while (arr.length < 4) {
            var randomnumber = Math.ceil(Math.random() * 11)
            if (arr.indexOf(randomnumber) === -1) {
                arr.push(randomnumber)
            }
        }

        //removing flag and answer containers
        $("#flag").empty();

        //if x1 eaquels below 5 there we have capitols asks, in another case we have flags tasks
        if (x1 <= 5) {
            $("#question span").text("Podaj stolice");

            //in start php we are creating objects and gettin from there
            $.post('php/start.php', {
                Liczba: x1
            }, function (data) {
                correctAnswerRandomNumber = Math.floor(Math.random() * 3);
                prawidlowaOdpowiedz = data[arr[correctAnswerRandomNumber]]['stolica'];
                $("#question span").text("Stolicą " + data[arr[correctAnswerRandomNumber]]['pytanie'] + " jest: ");
                $("#flag").append('<span class="d-flex justify-content-center" width=200px height=100px>' + data[arr[1]]['stolica'] + '</span>');
                $("#flag").append('<span class="d-flex justify-content-center" width=200px height=100px>' + data[arr[3]]['stolica'] + '</span>');
                $("#flag").append('<span class="d-flex justify-content-center" width=200px height=100px>' + data[arr[0]]['stolica'] + '</span>');
                $("#flag").append('<span class="d-flex justify-content-center" width=200px height=100px>' + data[arr[2]]['stolica'] + '</span>');
                //after creating of answers, we have there option of click function to give answer to task
                $('#flag span').on('click', function () {
                    if ($(this).text() === prawidlowaOdpowiedz) {
                        wynik++;
                        $("#score table tbody tr:nth-child(3) td").text(wynik);

                    }
                    else
                        bledneOdpowiedzi++;
                    numerPytania++;
                    $("#score table tbody tr:nth-child(2) td").text(numerPytania);
                    KolejnePytanie();
                });

            }, "json");
        } else {
            $.post('php/start.php', {
                Liczba: x1
            }, function (data) {
                correctAnswerRandomNumber = Math.floor(Math.random() * 3);
                prawidlowaOdpowiedz = data[arr[correctAnswerRandomNumber]]['panstwo'];
                $("#question span").text("Wybierz prawidłową flagę dla państwa: " + data[arr[correctAnswerRandomNumber]]['pytanie']);
                $("#flag").append('<img width=200px height=100px src=' + data[arr[1]]['flaga'] + ' alt="' + data[arr[1]]['panstwo'] + '">');
                $("#flag").append('<img width=200px height=100px src=' + data[arr[3]]['flaga'] + ' alt="' + data[arr[3]]['panstwo'] + '">');
                $("#flag").append('<img width=200px height=100px src=' + data[arr[0]]['flaga'] + ' alt="' + data[arr[0]]['panstwo'] + '">');
                $("#flag").append('<img width=200px height=100px src=' + data[arr[2]]['flaga'] + ' alt="' + data[arr[2]]['panstwo'] + '">');
                $('#flag img').on('click', function () {
                    if (this.alt == prawidlowaOdpowiedz) {
                        wynik++;
                        $("#score table tbody tr:nth-child(3) td").text(wynik);

                    }
                    else
                        bledneOdpowiedzi++;
                    numerPytania++;
                    $("#score table tbody tr:nth-child(2) td").text(numerPytania);

                    KolejnePytanie();

                });

            }, "json");

        }
    }

});
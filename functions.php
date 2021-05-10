<?php
    assert(0 === diskriminant(0, 0, 0));
    assert(0 === diskriminant(0, 0));
    assert(-3 === diskriminant(1, 1, 1));
    assert(0 === diskriminant(1, 2, 1));
    assert(-4 === diskriminant(1, 2, 2));
    assert(21 === diskriminant(1, 5, 1));

    function diskriminant($a, $b, $c = 0)
    {
        return pow($b, 2) - 4 * $a * $c;
    }

    assert('female' === get_sex_by_name('Елена'));
    assert('female' === get_sex_by_name('Екатерина'));
    assert('female' === get_sex_by_name('Дарья'));
    assert('female' === get_sex_by_name('Виктория'));
    assert('female' === get_sex_by_name('Ольга'));
    assert('female' === get_sex_by_name('Александра'));
    assert('female' === get_sex_by_name('Евгения'));
    assert('female' === get_sex_by_name('Валентина'));
    assert('female' === get_sex_by_name('Павла'));
    assert('male' === get_sex_by_name('Петр'));
    assert('male' === get_sex_by_name('Степан'));
    assert('male' === get_sex_by_name('Даниил'));
    assert('male' === get_sex_by_name('Альберт'));
    assert('male' === get_sex_by_name('Иван'));
    assert('male' === get_sex_by_name('Сергей'));
    assert('male' === get_sex_by_name('Василий'));
    assert('male' === get_sex_by_name('Максим'));
    assert('male' === get_sex_by_name('Артём'));
    assert('male' === get_sex_by_name('Евгений'));
    assert('male' === get_sex_by_name('Александр'));
    assert('male' === get_sex_by_name('Валентин'));
    assert('male' === get_sex_by_name('Павел'));
    assert('male' === get_sex_by_name('Евгений'));
    assert('male' === get_sex_by_name('Александр'));

function get_sex_by_name($name)
    {
        $last_char = mb_substr($name, -1);

        switch(true) {
            case 'а' == $last_char:
                return 'female';
            case 'я' == $last_char:
                return 'female';
            case 'е' == $last_char:
                return 'female';
            case 'б' == $last_char:
                return 'male';
            case 'в' == $last_char:
                return 'male';
            case 'г' == $last_char:
                return 'male';
            case 'д' == $last_char:
                return 'male';
            case 'к' == $last_char:
                return 'male';
            case 'л' == $last_char:
                return 'male';
            case 'м' == $last_char:
                return 'male';
            case 'н' == $last_char:
                return 'male';
            case 'о' == $last_char:
                return 'male';
            case 'п' == $last_char:
                return 'male';
            case 'р' == $last_char:
                return 'male';
            case 'с' == $last_char:
                return 'male';
            case 'т' == $last_char:
                return 'male';
            case 'й' == $last_char:
                return 'male';
            case 'ь' == $last_char:
                return 'male';
            default:
                return 'undefined';
        }
    }
?>
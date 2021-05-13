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

    assert('Женщина' === get_sex_by_name('Елена'));
    assert('Женщина' === get_sex_by_name('Екатерина'));
    assert('Женщина' === get_sex_by_name('Дарья'));
    assert('Женщина' === get_sex_by_name('Виктория'));
    assert('Женщина' === get_sex_by_name('Ольга'));
    assert('Женщина' === get_sex_by_name('Александра'));
    assert('Женщина' === get_sex_by_name('Евгения'));
    assert('Женщина' === get_sex_by_name('Валентина'));
    assert('Женщина' === get_sex_by_name('Павла'));
    assert('Мужчина' === get_sex_by_name('Петр'));
    assert('Мужчина' === get_sex_by_name('Степан'));
    assert('Мужчина' === get_sex_by_name('Даниил'));
    assert('Мужчина' === get_sex_by_name('Альберт'));
    assert('Мужчина' === get_sex_by_name('Иван'));
    assert('Мужчина' === get_sex_by_name('Сергей'));
    assert('Мужчина' === get_sex_by_name('Василий'));
    assert('Мужчина' === get_sex_by_name('Максим'));
    assert('Мужчина' === get_sex_by_name('Артём'));
    assert('Мужчина' === get_sex_by_name('Евгений'));
    assert('Мужчина' === get_sex_by_name('Александр'));
    assert('Мужчина' === get_sex_by_name('Валентин'));
    assert('Мужчина' === get_sex_by_name('Павел'));
    assert('Мужчина' === get_sex_by_name('Евгений'));
    assert('Мужчина' === get_sex_by_name('Александр'));

function get_sex_by_name($name)
    {
        $last_char = mb_substr($name, -1);

        switch($last_char) {
            case 'а' == $last_char:
                return 'Женщина';
            case 'я' == $last_char:
                return 'Женщина';
            case 'е' == $last_char:
                return 'Женщина';
            case 'б' == $last_char:
                return 'Мужчина';
            case 'в' == $last_char:
                return 'Мужчина';
            case 'г' == $last_char:
                return 'Мужчина';
            case 'д' == $last_char:
                return 'Мужчина';
            case 'к' == $last_char:
                return 'Мужчина';
            case 'л' == $last_char:
                return 'Мужчина';
            case 'м' == $last_char:
                return 'Мужчина';
            case 'н' == $last_char:
                return 'Мужчина';
            case 'о' == $last_char:
                return 'Мужчина';
            case 'п' == $last_char:
                return 'Мужчина';
            case 'р' == $last_char:
                return 'Мужчина';
            case 'с' == $last_char:
                return 'Мужчина';
            case 'т' == $last_char:
                return 'Мужчина';
            case 'й' == $last_char:
                return 'Мужчина';
            case 'ь' == $last_char:
                return 'Мужчина';
            default:
                return 'Пол не определен';
        }
    }
?>

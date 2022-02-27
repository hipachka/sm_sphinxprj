<?php

namespace App\DataFixtures;

use App\Entity\EduPages;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $items = [
            ['id' => 15,
            'timemodified' => 1585733760,
            'name' => 'От авторов',
            'content' => '<p>Дорогой читатель! Этот учебник&nbsp;— подарок компании Samsung Electronics всем тем, кто хочет научиться разработке приложений для мобильных устройств. Это результат труда большого коллектива единомышленников — участников проекта IT ШКОЛА SAMSUNG: преподавателей всех наших площадок в России и специалистов Samsung.</p>
            <p>Немного истории. В 2013 году в России стартовала <nobr>социально-образовательная</nobr> программа IT ШКОЛА SAMSUNG, в рамках которой компания Samsung с целью содействия в подготовке будущих <nobr>инженерно-технических</nobr> кадров, а также повышения интереса школьников к сфере <nobr>IT-инноваций</nobr>, открыла бесплатные курсы для старшеклассников. И с тех пор ежегодно в более чем 20 городах России мы принимаем детей на этот годовой курс. Занятия проходят под руководством учителей в классах, оборудованных современной техникой, школьники изучают программирование на языке Java для мобильных устройств на платформе Android. Информацию о проекте, и как к нам поступить, можно найти на сайте IT Школы Samsung <a ref="http://www.samsung.com/ru/itschool/">http://www.samsung.com/ru/itschool/</a>.</p>
            <p>Программа IT Школы Samsung очень непростая. Вместе с изучением особенностей платформы Android в курсе обсуждаются почти все аспекты современного программирования: <nobr>объектно-ориентированное</nobr> программирование, работа с базами данных, сетевые технологии и многие другие вопросы. Современное программирование стало невозможно изучать последовательно. Поэтому в тексте иногда будут встречаться незнакомые термины и понятия, многие из которых рассмотрены в учебнике позже. Впрочем, часто незнакомое интуитивно понятно.</p>
            <p>При этом за прошедшие 4 года существования IT Школы более 2200 школьников, удивляя нас и демонстрируя поразительные результаты, успешно завершили программу и доказали право на ее существование. В ответ на многочисленные запросы мы решили поделиться результатами со всеми, кто хочет изучить самостоятельно или научить других мобильной разработке. Надеемся, что наш учебник сделает эту актуальнейшую область более доступной для множества талантливых детей.</p>
            <p>В наше время мобильные телефоны — это самые настоящие компьютеры, и практически у каждого он всегда с собой! Вычислительная мощность современного мобильного телефона серьезно превосходит общую вычислительную мощность компьютеров институтов, в которых рассчитывали первые космические полеты. Одно устройство весом в несколько сотен грамм сейчас — это не только средство беспроводной коммуникации, но и фотоаппарат, и камера, и видеоплеер, и игровая приставка, и навигатор!</p>
            <p>Смартфоны значительно расширили магический мир программирования, и мы приглашаем вас сделать с нами первый шаг в интереснейший мир мобильной разработки!</p>'],
            [
                'id' => 16,
                'timemodified' => 1568620774,
                'name' => 'Благодарности',
                'content' => '<p>Учебник IT Школы Samsung — это результат труда большого коллектива единомышленников: преподавателей всех наших площадок в России и специалистов Samsung.</p>
<p>Компания Samsung Electronics выражает огромную благодарность людям, кто внес существенный вклад в работы по подготовке материалов и тестов, а также общей редакции учебника:</p>
<p>Ильину В., Митякову Е., Яценко Д., Бабошкину А., Дружинской Е., Кашанову Д., Петрушину И.;</p>
<p>преподавателям, за помощь в подготовке учебных материалов:</p>
<p>Боровому Д., Варакину М., Варюхину С., Вихрову В., Гильдину А., Глухову Д., Деникину А., Деникиной Н., Доброхотовой Л., Дубинину А., Зайдуллиной С., Исаеву Р., Канаеву К., Коноркину И., Кравцовой М., Крылову С., Куренкову В., Лаврентьеву К., Лянгузову
    Ф., Маннапову И., Муль П., Покровской В., Пономарчук Ю., Плотникову Д., Реймерову С., Сергиенко А., Соколову М., Сопченко Е., Стрельцову М., Тазетдинову А., Томилову И., Ушакову Д., Фиониной Л., Хлебостроеву В., Шелихову О., Язовцеву И.;</p>
<p>идейным вдохновителям, составителям и кураторам программы IT ШКОЛА SAMSUNG:</p>
<p>Певневу С., Аликберову И., Трубу И., Гольштейну В., Айнбунду Р., Юн С., Колгановой А.</p>
<p>а также компании Lecta и другим специалистам, внесшим вклад в подготовку нашего интерактивного электронного учебника!</p>
<p>Благодаря вам, мир информационных технологий стал немного доступнее и ближе!</p>'
            ],
            [
                'id' => 17,
                'timemodified' => 1539344988,
                'name' => 'Обозначения в тексте',
                'content' => '<h2>Обозначения в тексте</h2>
<div class="extblock extblock-info">
    <p>В таких блоках указаны дополнительные сведения, необходимые для глубокого понимания материала. Может быть, при первом чтении их стоит пропускать, но затем обязательно возвращаться и пытаться осмыслить.</p>
</div>
<div class="extblock extblock-as">
    <p>В таких блоках представлены возможности среды программирования Android Studio, которую мы будем использовать преимущественно при программировании Android-приложений.</p>
    <p>Эти сведения можно использовать и для работы в IntelliJ IDEA, эти две среды очень похожи по интерфейсу.</p>
</div>
<div class="extblock extblock-eclipse">
    <p>В таких блоках показываются возможности среды программирования Eclipse, которую мы будем использовать на протяжении курса. Известно, что Google в качестве основной IDE для разработки под Android использует Android Studio, а Eclipse больше не поддерживает.</p>
    <p>Почему же мы используем Eclipse?</p>
    <p>Во-первых, на Android Studio можно написать «обычное» простое консольное приложение, но запускать его трудно — нужно настраивать конфигурацию запуска. Можно, конечно, все в <strong>TestBed</strong> запускать, но это только расход времени. Еще одна
        причина — Eclipse долгое время был фактически стандартной средой разработки на Java, в том числе под Android. Много статей и руководств ориентированы на него. Поэтому иметь преставление об этой среде, навыки работы в ней для Java-программистов
        очень полезно.</p>
    <p>На компьютерах Школы и в дистрибутивах, которые предлагаются учащимся для установки на домашние компьютеры, есть три среды — Eclipse, Android Studio и IntelliJ IDEA, из которой и «выросла» Android Studio, поэтому они похожи по интерфейсу. Но IntelliJ
        IDEA работает несколько медленней Eclipse.</p>
</div>
<p>Конечно, в курсе по программированию будет много исходного кода.</p>
<p>Чаще всего мы будем использовать язык Java. Вот как, например, выглядит знаменитый Hello World на этом языке:</p>
<pre><code>class HelloWorld{
    public static void main (String args []) {
        System.out.println ("Hello World");
    }
}</code></pre>
<p>При программировании под Android важную роль играет разметка, она делается на языке XML, поэтому</p>
<pre><code><text>
    <para>XML-код тоже будет встречаться часто</para>
</text>
</code></pre>
<p>Вывод программ на консоль показан в блоках.</p>
<p>Ну и, конечно, в тексте будет встречаться много ссылок, например, на <a href="https://developer.android.com">https://developer.android.com</a> — официальную документацию по Android, они выделяются голубым цветом.</p>
<p>Значком * выделены дополнительные темы, которые могут быть включены в основную программу обучения по усмотрению преподавателя.</p>'
            ],
            [
                'id' => 18,
                'timemodified' => 1585733444,
                'name' => 'Правила работы с курсом',
                'content' => '<h2>Правила работы с курсом</h2>
<pКурс it="" Школы="" samsung="" состоит="" из="" пяти="" модулей.="" Каждый="" модуль="" включает="" в="" себя="" несколько="" тем.="" Темы="" состоят="" лекций,="" вопросов="" и="" заданий.<="" p="">
<p>Работа с курсом предполагает, что вы</p>
<ul>
    <li>прочитаете лекцию, изучите все приведенные примеры;</li>
    <li>ответите на вопросы. Обычно это просто вопросы, например, с выбором ответа, но иногда будут встречаться вопросы со свободным вводом. При ответе на них не нужно писать целую программу, достаточно ввести одну или несколько строк кода;</li>
    <li>выполните задания. Обычно это задания на написания программ. Многие задания проверяются автоматически, но в некоторых случаях вы должны показать результат преподавателю.</li>
</ul>
<p>Задания, ориентированные на разработку Android-приложений часто включают в себя проекты-заготовки. Обычно они размещаются на Github (самом известном хостинге программного кода).</p>
<p><img src="@@PLUGINFILE@@/000_pic_1.png" width="360" height="270"></p>
<p>и для начала работы их надо скачать и разархивировать, а потом загрузить в Android Studio проект-заготовку.<br> Либо клонировать. Это удобно делать прямо из Android Studio.</p>
<p>В главном меню <br> VCS ⇒ Checkout from Version Control ⇒ Github</p>
<p><img src="@@PLUGINFILE@@/000_pic_2.png" width="960" height="369"></p>
<p></p>
<p><img src="@@PLUGINFILE@@/000_pic_3.png" width="631" height="173"></p>
<p>(Для этого предварительно должен быть установлен сам Git:&nbsp;<a href="https://git-scm.com/">https://git-scm.com/)</a></p></pКурс>'
            ],
            [
                'id' => 20,
                'timemodified' => 1587548905,
                'name' => 'Установка необходимых программ',
                'content' => 'Ссылки на очень подробные статьи преподавателя Samsung IT School Антона Борисовича Сергиенко

[Установка **JDK**](https://github.com/Harrix/harrix.dev-blog-2019/blob/master/2019-07-07-install-jdk-on-windows/2019-07-07-install-jdk-on-windows.md)

[Установка **Eclipse**](http://blog.harrix.org/article/2514)

[Установка **Android Studio**](https://github.com/Harrix/harrix.dev-blog-2019/blob/master/2019-07-16-install-android-studio/2019-07-16-install-android-studio.md)

[Сложение двух чисел в **Android Studio** на Java (Android приложение)](https://github.com/Harrix/harrix.dev-blog-2019/blob/master/2019-07-23-add-2-num-android/2019-07-23-add-2-num-android.md)

[Установка **IntelliJ IDEA**](https://github.com/Harrix/harrix.dev-blog-2019/blob/master/2019-07-14-install-intellij-idea/2019-07-14-install-intellij-idea.md)

[Сложение двух чисел в **IntelliJ IDEA** на Java (консольное приложение)](https://github.com/Harrix/harrix.dev-blog-2019/blob/master/2019-07-15-add-2-num-intellij-idea/2019-07-15-add-2-num-intellij-idea.md)

[Эмулятор **BlueStacks** для Android Studio](https://github.com/Harrix/harrix.dev-blog-2018/blob/master/2018-08-16-bluestacks-for-android-studio/2018-08-16-bluestacks-for-android-studio.md)

[Эмулятор **Genymotion** для Android Studio](https://github.com/Harrix/harrix.dev-blog-2018/blob/master/2018-08-16-genymotion-for-android-studio/2018-08-16-genymotion-for-android-studio.md)

[Эмулятор **Koplayer** для Android Studio](https://github.com/Harrix/harrix.dev-blog-2018/blob/master/2018-08-16-koplayer-for-android-studio/2018-08-16-koplayer-for-android-studio.md)

[Эмулятор **Nox** для Android Studio](https://github.com/Harrix/harrix.dev-blog-2018/blob/master/2018-08-16-nox-for-android-studio/2018-08-16-nox-for-android-studio.md)
'
            ],

            [
                'id' => 21,
                'timemodified' => 1587549004,
                'name' => 'Минипроект "Чемпионат России по футболу". Часть 2',
                'content' => '<p>Закончим разработку нашего приложения «Чемпионат России по футболу/хоккею», начатого в предыдущей теме.</p>
<p>Нами спроектирована следующая структура таблицы (табл. 4.16), в которой мы будем хранить результаты матчей.</p>
<p></p>
<p></p>
<p></p>
<p></p>
<p><figcaption>Табл. 4.16.</figcaption></p>
<p></p>
<p></p>
<p></p>
<table rules="groups">
<thead>
<tr><th style="width: 20%;">Столбец</th><th>Тип данных</th><th>Ограничения</th></tr>
</thead>
<tbody>
<tr>
<td style="vertical-align: top;">id</td>
<td>INTEGER</td>
<td>PRIMARY KEY AUTOINCREMENT</td>
</tr>
<tr>
<td style="vertical-align: top;">TeamHome</td>
<td>TEXT</td>
<td></td>
</tr>
<tr>
<td style="vertical-align: top;">TeamGuest</td>
<td>TEXT</td>
<td></td>
</tr>
<tr>
<td style="vertical-align: top;">GoalsHome</td>
<td>INT</td>
<td></td>
</tr>
<tr>
<td style="vertical-align: top;">GoalsGuast</td>
<td>INT</td>
<td></td>
</tr>
</tbody>
</table>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p>Вы можете использовать свой вариант БД, но тогда это будет необходимо учесть в коде.</p>
<p>Файл разметки <span>/res/layout/activity_main.xml</span></p>
<pre> <code data-language="java">&lt;LinearLayout xmlns:android="http://schemas.android.com/apk/res/android"
    android:layout_width="fill_parent"
    android:layout_height="wrap_content"
    android:orientation="vertical" &gt;
 
    &lt;ListView
        android:layout_width="fill_parent"
        android:layout_height="fill_parent"
        android:id="@+id/list"
        /&gt;
 
&lt;/LinearLayout&gt;</code></pre>
<p>Файл разметки <span>/res/layout/activity_add.xml</span></p>
<pre> <code data-language="java">&lt;RelativeLayout xmlns:android="http://schemas.android.com/apk/res/android"
    android:layout_width="fill_parent"
    android:layout_height="fill_parent"
    android:orientation="vertical" &gt;
 
    &lt;LinearLayout
        android:id="@+id/buttons"
        android:orientation="horizontal"
        android:layout_width="fill_parent"
        android:layout_height="wrap_content"
        android:layout_alignParentBottom="true" &gt;
        &lt;Button
            android:id="@+id/butSave"
            android:layout_width="fill_parent"
            android:layout_height="wrap_content"
            android:layout_weight="1"
            android:text="@string/save"
            /&gt;
 
        &lt;Button
            android:id="@+id/butCancel"
            android:layout_width="fill_parent"
            android:layout_height="wrap_content"
            android:layout_weight="1"
            android:text="@string/cancel"
            /&gt;
 
    &lt;/LinearLayout&gt;
 
    &lt;ScrollView
        android:layout_above="@id/buttons"
        android:layout_width="fill_parent"
        android:layout_height="fill_parent"
        android:fillViewport="true"&gt;
 
        &lt;LinearLayout
            android:layout_width="fill_parent"
            android:layout_height="wrap_content"
            android:orientation="vertical" &gt;
 
            &lt;LinearLayout
                android:layout_width="match_parent"
                android:layout_height="wrap_content"
                android:orientation="horizontal" &gt;
                &lt;LinearLayout
                  android:layout_width="wrap_content"
                    android:layout_height="wrap_content"
                    android:orientation="vertical" &gt;
 
                    &lt;TextView
                        style="@style/TextStyle"
                        android:layout_width="125dp"
                        android:layout_height="wrap_content"
                        android:text="@string/teamhomefield" /&gt;
 
                    &lt;EditText
                        android:id="@+id/TeamHome"
                        android:layout_width="fill_parent"
                        android:layout_height="wrap_content"
                        android:inputType="text" /&gt;
 
            &lt;/LinearLayout&gt;
            &lt;LinearLayout
                    android:layout_width="wrap_content"
                    android:layout_height="wrap_content"
                    android:orientation="vertical" &gt;
 
                &lt;TextView
                    style="@style/TextStyle"
                    android:layout_width="120dp"
                    android:layout_height="wrap_content"
                    android:text="@string/teamguestfield" /&gt;
 
                &lt;EditText
                    android:id="@+id/TeamGuest"
                    android:layout_width="fill_parent"
                    android:layout_height="wrap_content"
                    android:inputType="text" &gt;
 
                    &lt;requestFocus /&gt;
                &lt;/EditText&gt;
 
            &lt;/LinearLayout&gt;
        &lt;/LinearLayout&gt;
                &lt;LinearLayout
                    android:layout_width="match_parent"
                    android:layout_height="wrap_content"
                    android:orientation="horizontal" &gt;
                    &lt;LinearLayout
                        android:layout_width="wrap_content"
                        android:layout_height="wrap_content"
                        android:orientation="vertical" &gt;
 
                        &lt;TextView
                            style="@style/TextStyle"
                            android:layout_width="123dp"
                            android:layout_height="wrap_content"
                            android:text="@string/goalshomefield" /&gt;
 
                        &lt;EditText
                            android:id="@+id/GoalsHome"
                            android:layout_width="fill_parent"
                            android:layout_height="wrap_content"
                            android:inputType="text" /&gt;
 
                    &lt;/LinearLayout&gt;
                   &lt;LinearLayout
                        android:layout_width="wrap_content"
                        android:layout_height="wrap_content"
                        android:orientation="vertical" &gt;
 
                        &lt;TextView
                            style="@style/TextStyle"
                            android:layout_width="120dp"
                            android:layout_height="wrap_content"
                            android:text="@string/goalsguestfield" /&gt;
 
                    &lt;EditText
                        android:id="@+id/GoalsGuest"
                        android:layout_width="fill_parent"
                        android:layout_height="wrap_content"
                        android:inputType="text" /&gt;
 
                    &lt;/LinearLayout&gt;
                &lt;/LinearLayout&gt;
        &lt;/LinearLayout&gt;
    &lt;/ScrollView&gt;
&lt;/RelativeLayout&gt;</code></pre>
<p>Файл <span>/res/layout/item.xml</span></p>
<pre> <code data-language="java">&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;LinearLayout xmlns:android="http://schemas.android.com/apk/res/android"
    android:layout_height="wrap_content"
    android:layout_width="wrap_content"&gt;
 
    &lt;LinearLayout
        android:layout_height="wrap_content"
        android:layout_width="wrap_content"
        android:orientation="horizontal"
        android:paddingLeft="5dp" &gt;
        &lt;TextView
            android:id="@+id/TeamHome"
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
            android:textSize="20sp"
            android:textStyle="bold"
            android:textColor="#677566"
            /&gt;
         &lt;TextView
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
            android:textSize="20sp"
            android:textStyle="bold"
            android:textColor="#677566"
            android:text="-"
            /&gt;
        &lt;TextView
            android:id="@+id/TeamGuest"
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
             android:textSize="20sp"
            android:textStyle="bold"
            android:textColor="#677566"
            /&gt;
        &lt;TextView
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
            android:textSize="20sp"
            android:textStyle="bold"
            android:textColor="#677566"
            android:text="      "
            /&gt;
        &lt;TextView
            android:id="@+id/TeamTotal"
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
             android:textSize="20sp"
            android:textStyle="bold"
            android:textColor="#677566"
            /&gt;
    &lt;/LinearLayout&gt;
&lt;/LinearLayout&gt;</code></pre>
<p>Файл <span>/res/values/strings.xml</span></p>
<pre> <code data-language="java">&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;resources&gt;
    &lt;string name="hello"&gt;Hello World, SimpleDBActivity!&lt;/string&gt;
    &lt;string name="app_name"&gt;SimpleDB&lt;/string&gt;
    &lt;string name="title"&gt;Чемпионат мира по футболу&lt;/string&gt;
    &lt;string name="teamhomefield"&gt;Команда хозяев&lt;/string&gt;
    &lt;string name="teamguestfield"&gt;Команда гостей&lt;/string&gt;
    &lt;string name="goalshomefield"&gt;Голы хозяев&lt;/string&gt;
    &lt;string name="goalsguestfield"&gt;Голы гостей&lt;/string&gt;
    &lt;string name="save"&gt;Сохранить&lt;/string&gt;
    &lt;string name="edit"&gt;Редактировать&lt;/string&gt;
    &lt;string name="delete"&gt;Удалить&lt;/string&gt;
    &lt;string name="cancel"&gt;Отмена&lt;/string&gt;
    &lt;string name="icon"&gt;Icon&lt;/string&gt;
    &lt;string name="deleteAll"&gt;Удалить все&lt;/string&gt;
    &lt;string name="exit"&gt;Выход&lt;/string&gt;
    &lt;string name="add"&gt;Добавить&lt;/string&gt;
&lt;/resources&gt;</code></pre>
<p>Файл <span>/res/menu/menu_main.xml</span></p>
<pre> <code data-language="java">&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;menu xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    tools:context="com.example.op.simpledb.MainActivity"&gt;
    &lt;item android:id="@+id/add"
        android:title="@string/add"
        android:icon="@android:drawable/ic_menu_add"/&gt;
 
    &lt;item android:id="@+id/deleteAll"
        android:title="@string/deleteAll"
        android:icon="@android:drawable/ic_menu_delete"/&gt;
 
    &lt;item android:id="@+id/exit"
        android:title="@string/exit"
        android:icon="@android:drawable/ic_menu_close_clear_cancel"/&gt;
&lt;/menu&gt;</code></pre>
<p>Файл <span>/res/menu/context_menu.xml</span></p>
<pre> <code data-language="java">&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;menu
    xmlns:android="http://schemas.android.com/apk/res/android"&gt;
    &lt;item android:id="@+id/edit"
        android:title="@string/edit" /&gt;
    &lt;item android:id="@+id/delete"
        android:title="@string/delete" /&gt;
&lt;/menu&gt;</code></pre>
<p>Файл класса <span>Matches</span></p>
<pre> <code data-language="java">public class Matches implements Serializable{
    private long id;
    private String teamhouse;
    private String teamguest;
    private int goalshouse;
    private int goalsguest;
 
    public Matches (long id, String teamh, String teamg, int gh,int gg) {
        this.id = id;
        this.teamhouse = teamh;
        this.teamguest = teamg;
        this.goalshouse = gh;
        this.goalsguest=gg;
    }
 
    public long getId() {
        return id;
    }
 
    public String getTeamhouse() {
        return teamhouse;
    }
 
    public String getTeamguest() {
        return teamguest;
    }
 
    public int getGoalshouse() {
        return goalshouse;
    }
 
    public int getGoalsguest() {
        return goalsguest;
    }
}</code></pre>
<p>Файл <span>DBMatches.java</span></p>
<pre> <code data-language="java">public class DBMatches {
 
    private static final String DATABASE_NAME = "simple.db";
    private static final int DATABASE_VERSION = 1;
    private static final String TABLE_NAME = "tableMatches";
 
    private static final String COLUMN_ID = "id";
    private static final String COLUMN_TEAMHOME = "TeamНоme";
    private static final String COLUMN_TEAMGUAST = "TeamGuest";
    private static final String COLUMN_GOALSHOME = "GoalsHome";
    private static final String COLUMN_GOALSGUAST = "GoalsGuast";
 
    private static final int NUM_COLUMN_ID = 0;
    private static final int NUM_COLUMN_TEAMHOME = 1;
    private static final int NUM_COLUMN_TEAMGUAST = 2;
    private static final int NUM_COLUMN_GOALSHOME = 3;
    private static final int NUM_COLUMN_GOALSGUEST = 4;
 
    private SQLiteDatabase mDataBase;
 
    public DBMatches(Context context) {
        OpenHelper mOpenHelper = new OpenHelper(context);
        mDataBase = mOpenHelper.getWritableDatabase();
    }
 
    public long insert(String teamhouse,String teamguest,int goalshouse,int goalsguest) {
        ContentValues cv=new ContentValues();
        cv.put(COLUMN_TEAMHOME, teamhouse);
        cv.put(COLUMN_TEAMGUAST, teamguest);
        cv.put(COLUMN_GOALSHOME, goalshouse);
        cv.put(COLUMN_GOALSGUAST,goalsguest);
        return mDataBase.insert(TABLE_NAME, null, cv);
    }
 
    public int update(Matches md) {
        ContentValues cv=new ContentValues();
        cv.put(COLUMN_TEAMHOME, md.getTeamhouse());
        cv.put(COLUMN_TEAMGUAST, md.getTeamguest());
        cv.put(COLUMN_GOALSHOME, md.getGoalshouse());
        cv.put(COLUMN_GOALSGUAST,md.getGoalsguest());
        return mDataBase.update(TABLE_NAME, cv, COLUMN_ID + " = ?",new String[] { String.valueOf(md.getId())});
    }
 
    public void deleteAll() {
        mDataBase.delete(TABLE_NAME, null, null);
    }
 
    public void delete(long id) {
        mDataBase.delete(TABLE_NAME, COLUMN_ID + " = ?", new String[] { String.valueOf(id) });
    }
 
    public Matches select(long id) {
        Cursor mCursor = mDataBase.query(TABLE_NAME, null, COLUMN_ID + " = ?", new String[]{String.valueOf(id)}, null, null, null);
 
        mCursor.moveToFirst();
        String TeamHome = mCursor.getString(NUM_COLUMN_TEAMHOME);
        String TeamGuest = mCursor.getString(NUM_COLUMN_TEAMGUAST);
        int GoalsHome = mCursor.getInt(NUM_COLUMN_GOALSHOME);
        int GoalsGuest=mCursor.getInt(NUM_COLUMN_GOALSGUEST);
        return new Matches(id, TeamHome, TeamGuest, GoalsHome,GoalsGuest);
    }
 
    public ArrayList&lt;Matches&gt; selectAll() {
        Cursor mCursor = mDataBase.query(TABLE_NAME, null, null, null, null, null, null);
 
        ArrayList&lt;Matches&gt; arr = new ArrayList&lt;Matches&gt;();
        mCursor.moveToFirst();
        if (!mCursor.isAfterLast()) {
            do {
                long id = mCursor.getLong(NUM_COLUMN_ID);
                String TeamHome = mCursor.getString(NUM_COLUMN_TEAMHOME);
                String TeamGuest = mCursor.getString(NUM_COLUMN_TEAMGUAST);
                int GoalsHome = mCursor.getInt(NUM_COLUMN_GOALSHOME);
                int GoalsGuest=mCursor.getInt(NUM_COLUMN_GOALSGUEST);
                arr.add(new Matches(id, TeamHome, TeamGuest, GoalsHome,GoalsGuest));
            } while (mCursor.moveToNext());
        }
        return arr;
    }
 
    private class OpenHelper extends SQLiteOpenHelper {
 
        OpenHelper(Context context) {
            super(context, DATABASE_NAME, null, DATABASE_VERSION);
        }
        @Override
        public void onCreate(SQLiteDatabase db) {
            String query = "CREATE TABLE " + TABLE_NAME + " (" +
                    COLUMN_ID + " INTEGER PRIMARY KEY AUTOINCREMENT, " +
                    COLUMN_TEAMHOME+ " TEXT, " +
                    COLUMN_TEAMGUAST + " TEXT, " +
                    COLUMN_GOALSHOME + " INT,"+
                    COLUMN_GOALSGUAST+" INT);";
            db.execSQL(query);
        }
 
        @Override
        public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
            db.execSQL("DROP TABLE IF EXISTS " + TABLE_NAME);
            onCreate(db);
        }
    }
 
}</code></pre>
<p>Файл <span>MainActivity.java</span></p>
<pre> <code data-language="java">public class MainActivity extends Activity {
    DBMatches mDBConnector;
    Context mContext;
    ListView mListView;
    SimpleCursorAdapter scAdapter;
    Cursor cursor;
    myListAdapter myAdapter;
 
    int ADD_ACTIVITY = 0;
    int UPDATE_ACTIVITY = 1;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
 
        mContext=this;
        mDBConnector=new DBMatches(this);
        mListView=(ListView)findViewById(R.id.list);
        myAdapter=new myListAdapter(mContext,mDBConnector.selectAll());
        mListView.setAdapter(myAdapter);
        registerForContextMenu(mListView);
 
    }
 
    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }
 
    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        switch (item.getItemId()) {
            case R.id.add:
                Intent i = new Intent(mContext, AddActivity.class);
                startActivityForResult (i, ADD_ACTIVITY);
                updateList();
                return true;
            case R.id.deleteAll:
                mDBConnector.deleteAll();
                updateList();
                return true;
            case R.id.exit:
                finish();
                return true;
            default:
                return super.onOptionsItemSelected(item);
        }
    }
 
    @Override
    public void onCreateContextMenu(ContextMenu menu, View v, ContextMenu.ContextMenuInfo menuInfo) {
        super.onCreateContextMenu(menu, v, menuInfo);
        MenuInflater inflater = getMenuInflater();
        inflater.inflate(R.menu.context_menu, menu);
    }
 
    @Override
    public boolean onContextItemSelected(MenuItem item) {
        AdapterView.AdapterContextMenuInfo info = (AdapterView.AdapterContextMenuInfo) item.getMenuInfo();
        switch(item.getItemId()) {
            case R.id.edit:
                Intent i = new Intent(mContext, AddActivity.class);
                Matches md = mDBConnector.select(info.id);
                i.putExtra("Matches", md);
                startActivityForResult(i, UPDATE_ACTIVITY);
                updateList();
                return true;
            case R.id.delete:
                mDBConnector.delete (info.id);
                updateList();
                return true;
            default:
                return super.onContextItemSelected(item);
        }
    }
    private void updateList () {
        myAdapter.setArrayMyData(mDBConnector.selectAll());
        myAdapter.notifyDataSetChanged();
    }
 
    @Override
    protected void onActivityResult(int requestCode, int resultCode, Intent data) {
 
        if (resultCode == Activity.RESULT_OK) {
            Matches md = (Matches) data.getExtras().getSerializable("Matches");
            if (requestCode == UPDATE_ACTIVITY)
                mDBConnector.update(md);
            else
                mDBConnector.insert(md.getTeamhouse(), md.getTeamguest(), md.getGoalshouse(), md.getGoalsguest());
            updateList();
        }        
    }
 
    class myListAdapter extends BaseAdapter {
        private LayoutInflater mLayoutInflater;
        private ArrayList&lt;Matches&gt; arrayMyMatches;
 
        public myListAdapter (Context ctx, ArrayList&lt;Matches&gt; arr) {
            mLayoutInflater = LayoutInflater.from(ctx);
            setArrayMyData(arr);
        }
 
        public ArrayList&lt;Matches&gt; getArrayMyData() {
            return arrayMyMatches;
        }
 
        public void setArrayMyData(ArrayList&lt;Matches&gt; arrayMyData) {
            this.arrayMyMatches = arrayMyData;
        }
 
        public int getCount () {
            return arrayMyMatches.size();
        }
 
        public Object getItem (int position) {
 
            return position;
        }
 
        public long getItemId (int position) {
            Matches md = arrayMyMatches.get(position);
            if (md != null) {
                return md.getId();
            }
            return 0;
        }
 
        public View getView(int position, View convertView, ViewGroup parent) {
 
            if (convertView == null)
                convertView = mLayoutInflater.inflate(R.layout.item, null);
 
            TextView vTeamHome= (TextView)convertView.findViewById(R.id.TeamHome);
            TextView vTeamGuest = (TextView)convertView.findViewById(R.id.TeamGuest);
            TextView vTotal=(TextView)convertView.findViewById(R.id.TeamTotal);
 
 
            Matches md = arrayMyMatches.get(position);
            vTeamHome.setText(md.getTeamhouse());
            vTeamGuest.setText(md.getTeamguest());
            vTotal.setText(md.getGoalshouse()+":"+md.getGoalsguest());
 
            return convertView;
        }
    } // end myAdapter
}</code></pre>
<p>Файл <span>AddActivity.java</span></p>
<pre> <code data-language="java">public class AddActivity extends Activity {
    private Button btSave,btCancel;
    private EditText etTeamHome,etTeamGuest,etGoalsHome,etGoalsGuest;
    private Context context;
    private long MyMatchID;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_add);
 
        etTeamHome=(EditText)findViewById(R.id.TeamHome);
        etTeamGuest=(EditText)findViewById(R.id.TeamGuest);
        etGoalsHome=(EditText)findViewById(R.id.GoalsHome);
        etGoalsGuest=(EditText)findViewById(R.id.GoalsGuest);
        btSave=(Button)findViewById(R.id.butSave);
        btCancel=(Button)findViewById(R.id.butCancel);
 
        if(getIntent().hasExtra("Matches")){
            Matches matches=(Matches)getIntent().getSerializableExtra("Matches");
            etTeamHome.setText(matches.getTeamhouse());
            etTeamGuest.setText(matches.getTeamguest());
            etGoalsHome.setText(Integer.toString(matches.getGoalshouse()));
            etGoalsGuest.setText(Integer.toString(matches.getGoalsguest()));
            MyMatchID=matches.getId();
        }
        else
        {
            MyMatchID=-1;
        }
        btSave.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Matches matches=new Matches(MyMatchID,etTeamHome.getText().toString(),etTeamGuest.getText().toString(),                                                      Integer.parseInt(etGoalsHome.getText().toString()),                                                        Integer.parseInt(etGoalsGuest.getText().toString()));
                Intent intent=getIntent();
                intent.putExtra("Matches",matches);
                setResult(RESULT_OK,intent);
                finish();
            }
        });
 
        btCancel.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                finish();
            }
        });
    }
}</code></pre>
<p>После запуска приложения нажимаем на кнопку настроек и в меню выбираем «Добавить», чтобы внести новую запись в БД. Открывается другая <span>Activity</span> для ввода данных. Затем сохраняем и видим введенную информацию на экране (рис. 4.24).</p>
<figure class="pic" style="text-align: center;"><img src="http://myitschool.ru/book/pluginfile.php/11020/mod_book/chapter/472/4510_pic_1.png" width="360" height="640" /> <img src="http://myitschool.ru/book/pluginfile.php/11020/mod_book/chapter/472/4510_pic_2.png" width="360" height="640" /> <figcaption>Рис. 4.24.</figcaption></figure>
<p>При нажатии на строчку с результатами игр появляется меню, с помощью которого мы можем удалить или отредактировать ее.</p>
<p><a href="http://myitschool.ru/book/mod/resource/view.php?id=749">Скачать полный код проекта здесь...</a></p>
<p></p>'
            ],
            [
                'id' => 52,
                'timemodified' => 1603635667,
                'name' => 'Тесты для самопроверки.',
                'content' => '<p>Предлагаем вам пройти тесты для самопроверки от препреподавателя программы Александра Дрябы.</p>
<p><a href="https://forms.gle/Q4Tf6Xt4Y5UnNYYj8">Тест по занятию &quot;1.2 Типы данных и операции&quot;</a></p>
<p><a href="https://forms.gle/o1hwAQ1avmn3cukeA">Тест по занятию &quot;1.5 Логические выражения&quot;</a></p>
<p><a href="https://forms.gle/jwqUHoTEN4Ticu3AA">Тест по занятию &quot;1.6 Условный оператор&quot;</a></p>
<p><a href="https://forms.gle/DHWCYfuXYrHL3YPQ8">Тест по занятию &quot;1.7 Циклы while, do while&quot;</a></p>
<p><a href="https://forms.gle/W5uRSmJPbHmvbeis5">Тест по занятию &quot;1.8 Цикл for. Массивы&quot;</a></p>
<p><a href="https://forms.gle/V3QD9mkvdFNUv7HH9">Тест по занятию &quot;1.9. Методы (процедуры и функции)&quot;</a></p>
'
            ],
            [
                'id' => 55,
                'timemodified' => 1610889099,
                'name' => 'Обновление учебника',
                'content' => '<p>План обновления учебника IT-Школы:</p><p>2.5. Интерфейс Android-приложения. (Ответственная Дружинская Е.В.)</p><p>Убираем RelativeLayout</p><p>Подробнее разбираем LinearLayout</p><p>Добавляем со * раздел ConstraintLayout</p><p>Добавляем со * библиотеку Binding</p><p><br></p><p>2.6. Наследование и полиморфизм в Java (Ответственный Митяков Е.С.)</p><p>Добавляем со * ModelView и LiveData</p><p><br></p><p>3.4. Параллелизм и синхронизация, потоки (Ответственный&nbsp;Митяков Е.С.)</p><p>3.4.1 Передалать пример с AsyncTask, который deprecated, на WorkManager (https://developer.android.com/guide/background)</p><p><br></p><p>3.6. Фрагменты (Ответственный Яценко Д.В.)</p><p>Добавляем со * раздел Navigation API</p><p><br></p><p>4.3. Списки в Android. Адаптеры (Ответственный&nbsp;Лимасов А.М.)</p><p>Убираем ListView</p><p>Добавляем Spinner + Adapter</p><p>Добавляем со * RecyclerView</p><p><br></p><p>4.5. СУБД SQLite. Основы языка SQL (Ответственный&nbsp;Ильин В.В.)</p><p>4.5.9.-4.5.10. Переделываем с использованием библиотеки Room</p><p><br></p><p>5.4 Облачные платформы. REST-взаимодействие (Ответственный&nbsp;Бабошкин А.О.)</p><p>Полностью переделывает раздел</p><p><br></p><p>5.6. Дизайн программного обеспечения и приложений Material Design (Ответственный&nbsp;Яценко Д.В.)</p><p>Проверить актуальность материала и обновить при необходимости</p>'
            ]
        ];

    foreach($items as $item){
        $eduPage = new EduPages();
        $eduPage->setName($item['name']);
        $eduPage->setContent($item['content']);
        $eduPage->setTimemodified($item['timemodified']);


        $manager->persist($eduPage);
    }

        $manager->flush();
    }
}



$I = new AcceptanceTester($scenario);

$I->amOnUrl(url: "https://doculite.kz");
$I->click(link: "//a[@href='/login']");
$I->click(link: "//li[@class='regTypes-Item active'][@data-reg-type='email']");
$I->fillField(field: "//input[@placeholder='E-mail']", value: "test@mail.ru");
$I->fillField(field: "//input[@name='sPassword']", value: "qwerty");
$I->click(link: "//button[@id='login-button']");




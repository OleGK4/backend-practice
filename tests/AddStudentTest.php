<?php

use Controller\Students;
use Model\Student;
use PHPUnit\Framework\TestCase;
use Src\Request;

class AddStudentTest extends TestCase
{
    /**
     * @dataProvider studentProvider
     */
    public function testAddStudent(array $studentData, bool $expectSuccess): void
    {
        // Создаем заглушку для класса Request.
        $request = $this->createMock(Request::class);
        $request->method('all')->willReturn($studentData);
        $request->method = 'POST';

        // Создаем экземпляр класса, метод которого будем тестировать.
        $student = new Students();

        // Вызываем метод studentAdd() и сохраняем результат работы в переменную.
        $response = $student->studentAdd($request);

        // Проверяем статус добавления.
        if ($expectSuccess) {
            $this->assertInstanceOf(Student::class, Student::where('last_name', $studentData['last_name'])->first());
        } else {
            $this->assertFalse(Student::where('last_name', $studentData['last_name'])->exists());
        }
    }

    public static function studentProvider(): array
    {
        return [
            [
                [
                    'last_name' => 'qwe',
                    'first_name' => 'qwe',
                    'patronymic' => 'qwe',
                    'gender' => 'male',
                    'date_of_birth' => '1111-11-11',
                    'address' => 'qwe',
                    'group_id' => 1,
                ],
                false,
            ],
            [
                [
                    'last_name' => 'Иванов',
                    'first_name' => 'Иван',
                    'patronymic' => 'Иванович',
                    'gender' => 'male',
                    'date_of_birth' => '2002-02-23',
                    'address' => 'ул. Ленина, д. 1, кв. 1',
                    'group_id' => 1,
                ],
                true,
            ],
            [
                [
                    'last_name' => '',
                    'first_name' => '',
                    'patronymic' => '',
                    'gender' => '',
                    'date_of_birth' => '',
                    'address' => '',
                    'group_id' => '',
                ],
                false,
            ],
        ];
    }
    protected function setUp(): void
    {
        //Установка переменной среды
        $_SERVER['DOCUMENT_ROOT'] = '/D:/Progs/OSPanel/domains/BackendPractice ';   // /var/www/html

        //Создаем экземпляр приложения
        $GLOBALS['app'] = new Src\Application(include $_SERVER['DOCUMENT_ROOT'] . '/config/app.php');

        //Глобальная функция для доступа к объекту приложения
        if (!function_exists('app')) {
            function app()
            {
                return $GLOBALS['app'];
            }
        }
    }
}
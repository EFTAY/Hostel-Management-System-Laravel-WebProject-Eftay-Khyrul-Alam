<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\HostelMeal
 *
 * @property int $id
 * @property string $mealDay
 * @property string $mealType
 * @property string $mealItems
 * @property string $mealPrice
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HostelMeal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HostelMeal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HostelMeal query()
 * @method static \Illuminate\Database\Eloquent\Builder|HostelMeal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HostelMeal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HostelMeal whereMealDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HostelMeal whereMealItems($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HostelMeal whereMealPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HostelMeal whereMealType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HostelMeal whereUpdatedAt($value)
 */
	class HostelMeal extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\HostleSeats
 *
 * @property int $id
 * @property int $floor
 * @property string $flat
 * @property int $seatNumber
 * @property int $status
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Database\Factories\HostleSeatsFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|HostleSeats newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HostleSeats newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HostleSeats query()
 * @method static \Illuminate\Database\Eloquent\Builder|HostleSeats whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HostleSeats whereFlat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HostleSeats whereFloor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HostleSeats whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HostleSeats whereSeatNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HostleSeats whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HostleSeats whereUpdatedAt($value)
 */
	class HostleSeats extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Mealbill
 *
 * @property int $id
 * @property string $student_id
 * @property string $date
 * @property int $breakfast_quantity
 * @property int $breakfast_price
 * @property int $lunch_quantity
 * @property int $lunch_price
 * @property int $dinner_quantity
 * @property int $dinner_price
 * @property string $comments
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $total
 * @method static \Illuminate\Database\Eloquent\Builder|Mealbill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mealbill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mealbill query()
 * @method static \Illuminate\Database\Eloquent\Builder|Mealbill whereBreakfastPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mealbill whereBreakfastQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mealbill whereComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mealbill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mealbill whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mealbill whereDinnerPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mealbill whereDinnerQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mealbill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mealbill whereLunchPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mealbill whereLunchQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mealbill whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mealbill whereUpdatedAt($value)
 */
	class Mealbill extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MonthlyBill
 *
 * @property int $id
 * @property string $title
 * @property string $type
 * @property int $amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\MonthlyBillFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyBill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyBill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyBill query()
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyBill whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyBill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyBill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyBill whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyBill whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyBill whereUpdatedAt($value)
 */
	class MonthlyBill extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StudentInformation
 *
 * @property int $id
 * @property string $studentID
 * @property string|null $password
 * @property string $name
 * @property string $department
 * @property string|null $email
 * @property string $gender
 * @property string $phone
 * @property string $guardianPhone
 * @property string $nationality
 * @property string|null $present_address
 * @property string|null $permanent_address
 * @property string $seatNumber
 * @property string|null $paymentStatus
 * @property string $image
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Mealbill[] $hostel_meals
 * @property-read int|null $hostel_meals_count
 * @property-read \App\Models\HostleSeats $hostelseat
 * @method static \Database\Factories\StudentInformationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInformation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInformation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInformation query()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInformation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInformation whereDepartment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInformation whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInformation whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInformation whereGuardianPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInformation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInformation whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInformation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInformation whereNationality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInformation wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInformation wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInformation wherePermanentAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInformation wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInformation wherePresentAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInformation whereSeatNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInformation whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInformation whereStudentID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInformation whereUpdatedAt($value)
 */
	class StudentInformation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}


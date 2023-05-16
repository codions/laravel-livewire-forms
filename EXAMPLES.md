
## Examples


### FormComponent Example

```php
namespace App\Http\Livewire\Clients;

use Codions\LaravelLivewireForms\Components\Button;
use Codions\LaravelLivewireForms\Components\FormComponent;
use Codions\LaravelLivewireForms\Components\Input;
use Codions\LaravelLivewireForms\Components\Select;

class CreateClientForm extends FormComponent
{
    public $gridClass = 'row';

    public function fields()
    {
        return [
            Row::make()->fields([
                Input::make('name', 'Name')
                    ->placeholder('Full Name'),
                Input::make('email', 'Email')
                    ->type('email')
                    ->placeholder('Email, example: user@example.com'),
                Select::make('gender', 'Gender')
                    ->placeholder('Gender')
                    ->options(['Male', 'Female'])
                    ->addAttrs(['class' => 'd-block w-full']),
                Input::make('phone_no', 'Contact Number')
                    ->placeholder('(xxx) xxx xxxxx'),
                Input::make('street_address', 'Street Address'),
                Input::make('city', 'City'),
                Input::make('state', 'State / Parist'),
                Input::make('country', 'Country'),
            ])
        ];
    }

    public function buttons()
    {
        return [
            Button::make('Cancel', 'secondary')->url(route('team.index')),
            Button::make()->click('submit'),
        ];
    }
}
```

#### Form View

![Example Form](docs/images/sample-form.png)


### FormSliderComponent Example

```php
namespace App\Http\Livewire\Clients;

use Codions\LaravelLivewireForms\Components\Button;
use Codions\LaravelLivewireForms\Components\FormSliderComponent;
use Codions\LaravelLivewireForms\Components\Input;
use Codions\LaravelLivewireForms\Components\Select;

class CreateClientForm extends FormSliderComponent
{

    public $btnIcon = 'fa fa-user';
    public $btnText = 'Add Client';
    public $gridClass = 'row';

    ...

}
```


#### Form Slider View

![Example Form](docs/images/sample-form-slider.png)

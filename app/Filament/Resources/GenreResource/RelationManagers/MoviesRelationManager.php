<?php
use Filament\Forms;
use Filament\Tables;
use App\Models\Genre;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\GenreResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;
use App\Filament\Resources\GenreResource\RelationManagers;

class MoviesRelationManager extends RelationManager{
    protected static string $relationship = "movies";

    public function form(Form $form): Form{
        return $form
        ->schema([
            Forms\Components\Section::make("Details")
            ->columns(4)
            ->schema([
                TextInput::make("title")
                ->live()
                ->afterStateUpdated(fn (Set $set, ?string $state)=>$set('slug',Str::slug($state)))
                ->required()
                ->columnSpan(2),
                TextInput::make('slug')->columnSpan(2),
                Textarea::make('overview')->columnSpan(2), DatePicker::make('release_date')->columnSpan(2),
            ]),
            Forms\Components\Section::make('Urls')
            ->columns(4)
            ->schema([
                
            ])
        ]);
    }
}
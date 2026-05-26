<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Utilities\Set;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Support\Str;
use Filament\Schemas\Components\Utilities\Get;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (string $operation, $state, Set $set) {
                        if ($operation !== 'create') {
                            return;
                        }
                        $set('slug', Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->required()
                    ->disabled()
                    ->maxLength(255)
                    ->dehydrated()
                    ->unique(Gallery::class, 'slug', ignoreRecord: true),

                Select::make('category_id')
                    ->label('Category')
                    ->options(GalleryCategory::pluck('name', 'id'))
                    ->required()
                    ->live()  // triggers FileUpload to re-render with new path
                    ->default(null),

                    FileUpload::make('image')
                    ->image()
                    ->required()
                    ->disk('public')
                    ->directory(function (Get $get): string {
                        $categoryId = $get('category_id');

                        if ($categoryId) {
                            $category = GalleryCategory::find($categoryId);
                            if ($category) {
                                return 'galleries/' . $category->slug;
                            }
                        }

                        return 'galleries/uncategorized';
                    })
                    ->visibility('public'),
            ]);
    }
}
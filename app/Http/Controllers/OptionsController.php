<?php

namespace App\Http\Controllers;

use App\Repositories\OptionsRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class OptionsController
{
    public OptionsRepository $optionsRepository;
    public function __construct(OptionsRepository $optionsRepository)
    {
        $this->optionsRepository = $optionsRepository;
    }
    public function index(): View
    {
        $posts = $this->optionsRepository->postNullChecker();
        $mainArticleId = $this->optionsRepository->optionSelector('main');
        $firstArticleId = $this->optionsRepository->optionSelector('first');
        $secondArticleId = $this->optionsRepository->optionSelector('second');
        $thirdArticleId = $this->optionsRepository->optionSelector('third');

        return view('options/main', [
            'mainArticleId' => $mainArticleId,
            'firstArticleId' => $firstArticleId,
            'secondArticleId' => $secondArticleId,
            'thirdArticleId' => $thirdArticleId,
            'posts' => $posts]);
    }

    public function store(Request $request): RedirectResponse
    {
        $places = ['main', 'first', 'second', 'third'];

        foreach ($places as $place) {
            $inputKey = 'popular_posts_' . $place;

            if ($request->has($inputKey)) {
                $article = $this->optionsRepository->postFinder($request->input($inputKey));
                $popularPost = $this->optionsRepository->optionSelectorWithoutId($place);

                if ($article && $popularPost) {
                    $popularPost->canvas_posts_id = $article->id;
                    $popularPost->save();
                }
                break;
            }
        }

        return redirect()->back()->with('success', 'Popular posts updated successfully!');
    }
}

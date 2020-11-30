<?php

namespace App\Http\Services;

use App\Models\Post;

class CommentService
{
    public function getPostComments(Post $post)
    {
        /* TODO replace dummy data with nested set tree */
        return [
            [
                'id' => 1,
                'author' => 'Ник Автора 1',
                'date' => '2019-12-10 07:56:40',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'depth' => 0,
                'children' => [
                    [
                        'id' => 3,
                        'author' => 'Ник Автора 2',
                        'date' => '2019-12-10 07:56:40',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                        'depth' => 1,
                        'children' => [
                            [
                                'id' => 4,
                                'author' => 'Ник Автора 3',
                                'date' => '2019-12-10 07:56:40',
                                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                'depth' => 2,
                                'children' => []
                            ],
                            [
                                'id' => 5,
                                'author' => 'Ник Автора 3',
                                'date' => '2019-12-10 07:56:40',
                                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                'depth' => 2,
                                'children' => []
                            ]
                        ]
                    ],
                    [
                        'id' => 6,
                        'author' => 'Ник Автора 2',
                        'date' => '2019-12-10 07:56:40',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                        'depth' => 1,
                        'children' => []
                    ]
                ],
            ],
            [
                'id' => 2,
                'author' => 'Ник Автора 4',
                'date' => '2019-12-10 07:56:40',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'depth' => 0,
                'children' => [],
            ]
        ];
    }
}

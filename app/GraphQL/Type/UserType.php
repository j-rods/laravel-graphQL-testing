<?php

namespace App\GraphQL\Type;

class UserType extends GraphQLType
{
    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of a user'
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of a user'
            ],
            'email' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The email of a user'
            ],
            'bits' => [
                'type' => Type::listOf(GraphQL::type('Bit')),
                'description' => 'The user bits'
            ],
            'created_at' => [
                'type' => Type::string(),
                'description' => 'Date it was created'
            ],
            'updated_at' => [
                'type' => Type::string(),
                'description' => 'Date it was updated'
            ]
        ];
    }
}

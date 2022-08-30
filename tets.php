
$queryUsingVariables = <<<QUERY
    mutation addTags(\$id: ID!, \$tags: [String!]!) {
        tagsAdd(id: \$id, tags: \$tags) {
            node {
                id
            }
            userErrors {
                message
            }
        }
    }
QUERY;


$variables = [
    "id" => "gid://shopify/Product/7325887004864",
    "tags" => "one, two, three"
];

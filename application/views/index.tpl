{$user->name}<br>
{foreach $user->blogposts->find_all() as $post}
    {$post->name}
{/foreach}
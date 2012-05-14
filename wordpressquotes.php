<?php

/*
Plugin Name: WordPress Quotes
Plugin URI: http://wordpress.org/extend/plugins/wordpress-quote/
Description:This Simple WordPress Plugin displays a valuable, motivational, inspirational & successful quotes to your blog's sidebar.
Version: 1.1
Author: Balaji P M
Author URI: http://wordpress.org

***********************************

Copyright 2010  Balaji P M  (email : techbkr3@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

**********************************

	In short, this plugin is free to use by anyone and everyone. As this plugin is free,
	you can also donate and support this plugin if you like.
	
*/

add_action("widgets_init", array('WordPress_Quotes', 'register'));
register_activation_hook( __FILE__, array('WordPress_Quotes', 'activate'));
register_deactivation_hook( __FILE__, array('WordPress_Quotes', 'deactivate'));

class WordPress_Quotes {
  function activate(){
    $data = array('title' => 'WordPress Quotes', 'update' => 'Daily', 'credit' => 'Yes');
    if ( ! get_option('wordpress_quotes')){
      add_option('wordpress_quotes' , $data);
    } else {
      update_option('wordpress_quotes' , $data);
    }
  }
  
 function control(){
  $data = get_option('wordpress_quotes');
  ?>
    <p><label>Widget Title: <input name="wordpress_quotes_title"
type="text" value="<?php echo $data['title']; ?>" /></label></p>
<p><label>Update Quotes:</label> 
  <select name="wordpress_quotes_update">
  <option <?php if ($data['update'] == "Daily"){echo 'selected="selected"';} ?>>Daily</option>
  <option <?php if ($data['update'] == "Random"){echo 'selected="selected"';} ?>>Random</option>
</select></p>

<p><b>Update Quotes:</b><br/>
<b>Daily:</b> Updates quote every day<br/> 
<b>Random:</b> Updates quote on every pageviews<br/>
</p>

  <?php
   if (isset($_POST['wordpress_quotes_title'])){
   	$data['title'] = attribute_escape($_POST['wordpress_quotes_title']);
    $data['update'] = attribute_escape($_POST['wordpress_quotes_update']);
    $data['credit'] = attribute_escape($_POST['wordpress_quotes_credit']);
    update_option('wordpress_quotes', $data);
  }
}

  function deactivate(){
    delete_option('wordpress_quotes');
  }
  function widget($args){
  	$data = get_option('wordpress_quotes');
    echo $args['before_widget'];
    echo $args['before_title'] . $data['title'] . $args['after_title'];
    
        
/* Display Quotes */


$quotes = array(

"The world has the habit of making room for the man whose words and actions show that he knows where he is going. 
<br/><b>Napoleon Hill </b>",

"Commitment leads to action. Action brings your dream closer. 
<br/><b>Marcia Wieder </b>",

"Circumstance does not make the man; it reveals him to himself.
<br/><b>James Allen </b>",

"Your life is in your hands, to make of it what you choose. 
<br/><b>John Kehoe </b>",

"Change will not come if we wait for some other person or some other time. We are the ones we've been waiting for. We are the change that we seek. 
<br/><b>Barack Obama </b>",

"Impossible is a word to be found only in the dictionary of fools. 
<br/><b>Napoleon Bonaparte </b>",

"The secret of getting ahead is getting started. 
<br/><b>Mark Twain </b>",

"Nothing can stop the man with the right mental attitude from achieving his goal; nothing on earth can help the man with the wrong mental attitude. 
<br/><b>Thomas Jefferson </b>",

"The only way of finding the limits of the possible is by going beyond them into the impossible. 
<br/><b>Arthur C. Clarke </b>",

"Man, alone, has the power to transform his thoughts into physical reality; man, alone, can dream and make his dreams come true. 
<br/><b>Napoleon Hill </b>",

"Our greatest glory is not in never failing but in rising up every time we fail. 
<br/><b>Ralph Waldo Emerson </b>",

"It is hard to fail, but it is worse never to have tried to succeed.
<br/><b>Theodore Roosevelt </b>",

"Try not to become a man of success but a man of value. 
<br/><b>Albert Einstein </b>",

"We are what we repeatedly do. Excellence, then, is not an act, but a habit.
<br/><b>Aristotle </b>",

"People who don't take risks generally make about two big mistakes a year. People who do take risks generally make about two big mistakes a year. 
<br/><b>Peter Drucker </b>",

"Cherish your visions and your dreams as they are the children of your soul, the blueprints of your ultimate achievements. 
<br/><b>Napoleon Hill </b>",

"I am careful not to confuse excellence with perfection. Excellence, I can reach for; perfection is God's business. 
<br/><b>Michael J. Fox </b>",

"Old friends pass away, new friends appear. It is just like the days. An old day passes, a new day arrives. The important thing is to make it meaningful: a meaningful friend - or a meaningful day. 
<br/><b>Dalai Lama </b>",

"When I let go of what I am, I become what I might be
<br/><b>Lao Tzu </b>",

"Fortune favours the brave.
<br/><b>Publius Terence </b>",

"Men are born to succeed, not fail.
<br/><b>Henry David Thoreau </b>",

"An eye for an eye only ends up making the whole world blind. 
<br/><b>Mohandas Gandhi </b>",

"Every artist was first an amateur. 
<br/><b>Ralph Waldo Emerson </b>",

"People often say that this or that person has not yet found himself. But the self is not something one finds, it is something one creates.
<br/><b>Thomas S. Szasz </b>",

"Unless you try to do something beyond what you have already mastered, you will never grow.
<br/><b>Ralph Waldo Emerson </b>",

"There are no such things as limits to growth, because there are no limits to the human capacity for intelligence, imagination, and wonder
<br/><b>Ronald Reagan </b>",

"History is a relentless master. It has no present, only the past rushing into the future. To try to hold fast is to be swept aside. 
<br/><b>John F. Kennedy </b>",

"Look at everything as though you were seeing it either for the first or last time. Then your time on earth will be filled with glory. 
<br/><b>Betty Smith</b>",

"Many of life's failures are people who did not realize how close they were to success when they gave up. 
<br/><b>Thomas Edison</b>",

"It doesn't matter where you are coming from. All that matters is where you are going. 
<br/><b>Brian Tracy</b>",

"Instead of worrying about what people say of you, why not spend time trying to accomplish something they will admire. 
<br/><b>Dale Carnegie </b>",

"All our dreams can come true, if we have the courage to pursue them. 
<br/><b>Walt Disney </b>",

"A person who has a cat by the tail knows a whole lot more about cats than someone who has just read about them. 
<br/><b>Mark Twain</b>",

"Be Content with what you have; rejoice in the way things are. When you realize there is nothing lacking, the whole world belongs to you.
<br/><b>Lao Tzu </b>",

"The future belongs to those who believe in the beauty of their dreams. 
<br/><b>Eleanor Roosevelt</b>",

"A dog is not considered a good dog because he is a good barker. A man is not considered a good man because he is a good talker. 
<br/><b>Buddha </b>",

"Wealth, like happiness, is never attained when sought after directly. It comes as a by-product of providing a useful service. 
<br/><b>Henry Ford </b>",

"Don't judge those who try and fail, judge those who fail to try. 
<br/><b>Unknown</b>",

"I can accept failure, everyone fails at something. But I can't accept not trying. 
<br/><b>Michael Jordan </b>",

"Every great man, every successful man, no matter what the field of endeavor, has known the magic that lies in these words: every adversity has the seed of an equivalent or greater benefit. 
<br/><b>W. Clement Stone </b>",

"Opportunities are like sunrises. If you wait too long, you miss them. 
<br/><b>Unknown</b>",

"Once you have mastered time, you will understand how true it is that most people overestimate what they can accomplish in a year - and underestimate what they can achieve in a decade. 
<br/><b>Tony Robbins </b>",

"The only thing in life achieved without effort is failure. 
<br/><b>Unknown</b>",

"If I'd had some set idea of a finish line, don't you think I would have crossed it years ago? 
<br/><b>Bill Gates </b>",

"The truth is that there is nothing noble in being superior to somebody else. The only real nobility is in being superior to your former self. 
<br/><b>Whitney Young</b>",

"Success isn't a result of spontaneous combustion. You must set yourself on fire. 
<br/><b>Arnold H. Glasow </b>",

"He who is not contented with what he has, would not be contented with what he would like to have. 
<br/><b>Socrates</b>",

"The man of wisdom is never of two minds; the man of benevolence never worries; the man of courage is never afraid. 
<br/><b>Confucius</b>",

"Most people have no idea of the giant capacity we can immediately command when we focus all of our resources on mastering a single area of our lives. 
<br/><b>Tony Robbins </b>",

"A friend is one who knows us, but loves us anyway. 
<br/><b>Jerome Cummings</b>",

"Are you bored with life? Then throw yourself into some work you believe in with all your heart, live for it, die for it, and you will find happiness that you had thought could never be yours. 
<br/><b>Dale Carnegie </b>",

"Failure is not a single, cataclysmic event. You don't fail overnight. Instead, failure is a few errors in judgement, repeated every day. 
<br/><b>Jim Rohn </b>",

"Do not anticipate trouble, or worry about what may never happen. Keep in the sunlight. 
<br/><b>Benjamin Franklin</b>",

"Happiness depends more on the inward disposition of mind than on outward circumstances. 
<br/><b>Benjamin Franklin</b>",

"Stretching his hand up to reach the stars, too often man forgets the flowers at his feet. 
<br/><b>Jeremy Bentham </b>",

"What we plant in the soil of contemplation, we shall reap in the harvest of action. 
<br/><b>Meister Eckhart </b>",

"When you see a man of worth, think of how you may emulate him. When you see one who is unworthy, examine yourself. 
<br/><b>Confucius</b>",

"Success is getting what you want. Happiness is wanting what you get. 
<br/><b>Dale Carnegie</b>",

"Justice consists not in being neutral between right and wrong, but in finding out the right and upholding it, wherever found, against the wrong. 
<br/><b>Theodore Roosevelt</b>",

"Don't aim for success if you want it; just do what you love and believe in, and it will come naturally. 
<br/><b>David Frost </b>",

"I never think of the future - it comes soon enough. 
<br/><b>Albert Einstein</b>",

"A real decision is measured by the fact that you've taken a new action. If there's no action, you haven't truly decided. 
<br/><b>Tony Robbins </b>",

"Happy are those who dream dreams and are ready to pay the price to make them come true. 
<br/><b>Leon J. Suenes</b>",

"The only way of finding the limits of the possible is by going beyond them into the impossible. 
<br/><b>Arthur C. Clarke</b>",

"You cannot dream yourself into a character: you must hammer and forge yourself into one. 
<br/><b>Henry D. Thoreau</b>",

"Knowing is not enough; we must apply. Willing is not enough; we must do. 
<br/><b>Johann Wolfgang von Goethe</b>",

"Think twice before you speak, because your words and influence will plant the seed of either success or failure in the mind of another. 
<br/><b>Napoleon Hill </b>",

"It is better to conquer yourself than to win a thousand battles. Then the victory is yours. It cannot be taken from you, not by angels or by demons, heaven or hell. 
<br/><b>Buddha </b>",

"Keep steadily before you the fact that all true success depends at last upon yourself. 
<br/><b>Theodore T. Hunger</b>",

"I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel. 
<br/><b>Maya Angelou</b>",

"The talent of success is nothing more than doing what you can do, well. 
<br/><b>Henry W. Longfellow</b>",

"When you dance, your purpose is not to get to a certain place on the floor. It's to enjoy each step along the way.
<br/><b>Wayne Dyer </b>",

"I try to learn from the past, but I plan for the future by focusing exclusively on the present. That's were the fun is. 
<br/><b>Donald Trump </b>",

"Whether you think that you can, or that you can't, you are usually right.
<br/><b>Henry Ford </b>",

"We are all faced with a series of great opportunities brilliantly disguised as impossible situations.
<br/><b>Charles R. Swindoll </b>",

"Don't hold to anger, hurt or pain. They steal your energy and keep you from love. 
<br/><b>Leo Buscaglia</b>",

"If you want others to be happy, practice compassion. If you want to be happy, practice compassion. 
<br/><b>Dalai Lama </b>",

"Life shrinks or expands in proportion to one's courage. 
<br/><b>Anais Nin</b>",

"There is only one person who could ever make you happy, and that person is you. 
<br/><b>David Burns</b>",

"Be careful the environment you choose for it will shape you; be careful the friends you choose for you will become like them. 
<br/><b>W. Clement Stone </b>",

"Whatever the mind of man can conceive and believe, it can achieve. 
<br/><b>W. Clement Stone</b>",

"I've learned that you shouldn't go through life with a catcher's mitt on both hands; you need to be able to throw something back. 
<br/><b>Maya Angelou </b>",

"Give me a stock clerk with a goal and I’ll give you a man who will make history. Give me a man with no goals and I’ll give you a stock clerk. 
<br/><b>J.C. Penney </b>",

"Sing like no one's listening, love like you've never been hurt, dance like nobody's watching, and live like its heaven on earth.
<br/><b>Mark Twain </b>",

"Early to bed, early to rise, makes a man healthy, wealthy and wise
<br/><b>Benjamin Franklin </b>",

"Success is not final, failure is not fatal: it is the courage to continue that counts.
<br/><b>Winston Churchill </b>",

"Know where to find the information and how to use it - That's the secret of success.
<br/><b>Albert Einstein </b>",

"Do not be too moral. You may cheat yourself out of much life. Aim above morality. Be not simply good; be good for something. 
<br/><b>Henry David Thoreau</b>",

"I've failed over and over and over again in my life and that is why I succeed. 
<br/><b>Michael Jordan </b>",

"Anyone who stops learning is old, whether at twenty or eighty. Anyone who keeps learning stays young. The greatest thing in life is to keep your mind young. 
<br/><b>Henry Ford </b>",

"A successful man is one who can lay a firm foundation with the bricks others have thrown at him. 
<br/><b>David Brinkley</b>",

"I don't know the key to success, but the key to failure is trying to please everybody. 
<br/><b>Bill Cosby </b>",

"Success is how high you bounce when you hit bottom. 
<br/><b>George S. Patton</b>",

"Today, the greatest single source of wealth is between your ears. Today, wealth is contained in brainpower, not brutepower 
<br/><b>Brian Tracy</b>",

"You can't expect abundance to work in just one direction. If the tide only came in we would all drown. 
<br/><b>Unknown</b>",

"If you have built castles in the air, your work need not be lost; that is where they should be. Now put foundations under them. 
<br/><b>Henry David Thoreau</b>",

"If there is any one secret of success, it lies in the ability to get the other person's point of view and see things from that person's angle as well as from your own. 
<br/><b>Henry Ford </b>",

"People take different roads seeking fulfillment and happiness. Just because they're not on your road doesn't mean they've gotten lost. 
<br/><b>Dalai Lama</b>",

"Happiness is not achieved by the conscious pursuit of happiness; it is generally the by-product of other activities. 
<br/><b>Aldous Huxley</b>",

"Great spirits have always encountered violent opposition from mediocre minds. 
<br/><b>Albert Einstein</b>",

"If you are not willing to risk the unusual, you will have to settle for the ordinary. 
<br/><b>Jim Rohn </b>",

"Give me six hours to chop down a tree and I will spend the first four sharpening the axe. 
<br/><b>Abraham Lincoln </b>",

"The difference between a successful person and others is not a lack of strength, not a lack of knowledge, but rather a lack in will. 
<br/><b>Vince Lombardi</b>",

"You can't build a reputation on what you are going to do. 
<br/><b>Henry Ford</b>",

"I never looked at the consequences of missing a big shot... when you think about the consequences you always think of a negative result. 
<br/><b>Michael Jordan </b>",

"In the hopes of reaching the moon men fail to see the flowers that blossom at their feet. 
<br/><b>Albert Schweitzer</b>",

"It is literally true that you can succeed best and quickest by helping others to succeed. 
<br/><b>Napoleon Hill </b>",

"Nothing is predestined: The obstacles of your past can become the gateways that lead to new beginnings. 
<br/><b>Ralph Blum</b>",

"In order to succeed, your desire for success should be greater than your fear of failure.
<br/><b>Bill Cosby </b>",

"The two most important requirements for major success are: first, being in the right place at the right time, and second, doing something about it.
<br/><b>Ray Kroc </b>",

"Instead of worrying about what people say of you, why not spend time trying to accomplish something they will admire.
<br/><b>Dale Carnegie </b>",

"Your imagination is your preview of life's coming attractions. 
<br/><b>Albert Einstein</b>",

"You must give some time to your fellow men. Even if it's a little thing, do something for others - something for which you get no pay but the privilege of doing it. 
<br/><b>Albert Schweitzer</b>",

"In the absence of clearly-defined goals, we become strangely loyal to performing daily trivia until ultimately we become enslaved by it. 
<br/><b>Robert Heinlein</b>",

"A hero is no braver than an ordinary man, but he is braver five minutes longer. 
<br/><b>Ralph Waldo Emerson</b>",

"There is no passion to be found playing small - in settling for a life that is less than the one you are capable of living. 
<br/><b>Nelson Mandela </b>",

"I know of no more encouraging fact than the unquestionable ability of man to elevate his life by conscious endeavor. 
<br/><b>Henry David Thoreau </b>",

"The big secret in life is that there is no big secret. Whatever your goal, you can get there if you're willing to work. 
<br/><b>Oprah Winfrey</b>",

"Happiness is not something you postpone for the future; it is something you design for the present. 
<br/><b>Jim Rohn </b>",

"For to be free is not merely to cast off one's chains, but to live in a way that respects and enhances the freedom of others. 
<br/><b>Nelson Mandela </b>",

"All growth depends upon activity. There is no development physically or intellectually without effort, and effort means work. 
<br/><b>Calvin Coolidge</b>",

"It was a high counsel that I once heard given to a young person, \"Always do what you are afraid to do.\" 
<br/><b>Ralph Waldo Emerson</b>",

"Being deeply loved by someone gives you strength, while loving someone deeply gives you courage.
<br/><b>Lao Tzu </b>",

"Success is the good fortune that comes from aspiration, desperation, perspiration and inspiration. 
<br/><b>Evan Esar</b>",

"Success does not consist in never making blunders, but in never making the same one a second time. 
<br/><b>Josh Billings</b>",

"The great thing in the world is not so much where we stand as in what direction we are moving. 
<br/><b>Oliver Wendell Holmes</b>",

"Thousands of candles can be lit from a single candle, and the life of the candle will not be shortened. Happiness never decreases by being shared.
<br/><b>Buddha </b>",

"Only after we can learn to forgive ourselves can we accept others as they are because we don't feel threatened by anything about them which is better than us.
<br/><b>Stephen Covey </b>",

"When you judge another, you do not define them, you define yourself.
<br/><b>Wayne Dyer </b>",

"After the game, the king and the pawn go into the same box. 
<br/><b>Italian Proverb</b>",

"We are the creative force of our life, and through our own decisions rather than our conditions, if we carefully learn to do certain things, we can accomplish those goals. 
<br/><b>Stephen Covey </b>",

"Character is like a tree and reputation like a shadow. The shadow is what we think of it; the tree is the real thing. 
<br/><b>Abraham Lincoln </b>",

"People who are always making allowances for themselves soon go bankrupt.
<br/><b>Mary Pettibone Poole </b>",


/* 888888888888888888888888888888888888888 */

"Commitment leads to action. Action brings your dream closer. 
<br/><b>Marcia Wieder</b>",

"Change will not come if we wait for some other person or some other time. We are the ones we've been waiting for. We are the change that we seek. 
<br/><b>Barack Obama </b>",

"Nothing can stop the man with the right mental attitude from achieving his goal; nothing on earth can help the man with the wrong mental attitude. 
<br/><b>Thomas Jefferson</b>",

"Man, alone, has the power to transform his thoughts into physical reality; man, alone, can dream and make his dreams come true. 
<br/><b>Napoleon Hill </b>",

"Try not to become a man of success but a man of value. 
<br/><b>Albert Einstein</b>",

"People who don't take risks generally make about two big mistakes a year. People who do take risks generally make about two big mistakes a year. 
<br/><b>Peter Drucker </b>",

"Cherish your visions and your dreams as they are the children of your soul, the blueprints of your ultimate achievements. 
<br/><b>Napoleon Hill </b>",

"I am careful not to confuse excellence with perfection. Excellence, I can reach for; perfection is God's business. 
<br/><b>Michael J. Fox</b>",

"Old friends pass away, new friends appear. It is just like the days. An old day passes, a new day arrives. The important thing is to make it meaningful: a meaningful friend - or a meaningful day. 
<br/><b>Dalai Lama </b>",

"When I let go of what I am, I become what I might be
<br/><b>Lao Tzu </b>",

"An eye for an eye only ends up making the whole world blind. 
<br/><b>Mohandas Gandhi </b>",

"Every artist was first an amateur. 
<br/><b>Ralph Waldo Emerson</b>",

"People often say that this or that person has not yet found himself. But the self is not something one finds, it is something one creates.
<br/><b>Thomas S. Szasz </b>",

"Unless you try to do something beyond what you have already mastered, you will never grow.
<br/><b>Ralph Waldo Emerson </b>",

"There are no such things as limits to growth, because there are no limits to the human capacity for intelligence, imagination, and wonder
<br/><b>Ronald Reagan </b>",

"History is a relentless master. It has no present, only the past rushing into the future. To try to hold fast is to be swept aside. 
<br/><b>John F. Kennedy </b>",

"Look at everything as though you were seeing it either for the first or last time. Then your time on earth will be filled with glory. 
<br/><b>Betty Smith</b>",

"Many of life's failures are people who did not realize how close they were to success when they gave up. 
<br/><b>Thomas Edison</b>",

"It doesn't matter where you are coming from. All that matters is where you are going. 
<br/><b>Brian Tracy</b>",

"Instead of worrying about what people say of you, why not spend time trying to accomplish something they will admire. 
<br/><b>Dale Carnegie </b>",

"All our dreams can come true, if we have the courage to pursue them. 
<br/><b>Walt Disney </b>",

"A person who has a cat by the tail knows a whole lot more about cats than someone who has just read about them. 
<br/><b>Mark Twain</b>",

"Be Content with what you have; rejoice in the way things are. When you realize there is nothing lacking, the whole world belongs to you.
<br/><b>Lao Tzu </b>",

"The future belongs to those who believe in the beauty of their dreams. 
<br/><b>Eleanor Roosevelt</b>",

"A dog is not considered a good dog because he is a good barker. A man is not considered a good man because he is a good talker. 
<br/><b>Buddha </b>",

"Wealth, like happiness, is never attained when sought after directly. It comes as a by-product of providing a useful service. 
<br/><b>Henry Ford </b>",

"Don't judge those who try and fail, judge those who fail to try. 
<br/><b>Unknown</b>",

"I can accept failure, everyone fails at something. But I can't accept not trying. 
<br/><b>Michael Jordan </b>",

"Every great man, every successful man, no matter what the field of endeavor, has known the magic that lies in these words: every adversity has the seed of an equivalent or greater benefit. 
<br/><b>W. Clement Stone </b>",

"Opportunities are like sunrises. If you wait too long, you miss them. 
<br/><b>Unknown</b>",

"Once you have mastered time, you will understand how true it is that most people overestimate what they can accomplish in a year - and underestimate what they can achieve in a decade. 
<br/><b>Tony Robbins </b>",

"The only thing in life achieved without effort is failure. 
<br/><b>Unknown</b>",

"If I'd had some set idea of a finish line, don't you think I would have crossed it years ago? 
<br/><b>Bill Gates </b>",

"The truth is that there is nothing noble in being superior to somebody else. The only real nobility is in being superior to your former self. 
<br/><b>Whitney Young</b>",

"Success isn't a result of spontaneous combustion. You must set yourself on fire. 
<br/><b>Arnold H. Glasow </b>",

"He who is not contented with what he has, would not be contented with what he would like to have. 
<br/><b>Socrates</b>",

"The man of wisdom is never of two minds; the man of benevolence never worries; the man of courage is never afraid. 
<br/><b>Confucius</b>",

"Most people have no idea of the giant capacity we can immediately command when we focus all of our resources on mastering a single area of our lives. 
<br/><b>Tony Robbins </b>",

"A friend is one who knows us, but loves us anyway. 
<br/><b>Jerome Cummings</b>",

"Are you bored with life? Then throw yourself into some work you believe in with all your heart, live for it, die for it, and you will find happiness that you had thought could never be yours. 
<br/><b>Dale Carnegie </b>",

"Failure is not a single, cataclysmic event. You don't fail overnight. Instead, failure is a few errors in judgement, repeated every day. 
<br/><b>Jim Rohn </b>",

"Do not anticipate trouble, or worry about what may never happen. Keep in the sunlight. 
<br/><b>Benjamin Franklin</b>",

"Happiness depends more on the inward disposition of mind than on outward circumstances. 
<br/><b>Benjamin Franklin</b>",

"Stretching his hand up to reach the stars, too often man forgets the flowers at his feet. 
<br/><b>Jeremy Bentham </b>",

"What we plant in the soil of contemplation, we shall reap in the harvest of action. 
<br/><b>Meister Eckhart </b>",

"When you see a man of worth, think of how you may emulate him. When you see one who is unworthy, examine yourself. 
<br/><b>Confucius</b>",

"Success is getting what you want. Happiness is wanting what you get. 
<br/><b>Dale Carnegie</b>",

"Justice consists not in being neutral between right and wrong, but in finding out the right and upholding it, wherever found, against the wrong. 
<br/><b>Theodore Roosevelt</b>",

"Don't aim for success if you want it; just do what you love and believe in, and it will come naturally. 
<br/><b>David Frost </b>",

"I never think of the future - it comes soon enough. 
<br/><b>Albert Einstein</b>",

"A real decision is measured by the fact that you've taken a new action. If there's no action, you haven't truly decided. 
<br/><b>Tony Robbins </b>",

"Happy are those who dream dreams and are ready to pay the price to make them come true. 
<br/><b>Leon J. Suenes</b>",

"The only way of finding the limits of the possible is by going beyond them into the impossible. 
<br/><b>Arthur C. Clarke</b>",

"You cannot dream yourself into a character: you must hammer and forge yourself into one. 
<br/><b>Henry D. Thoreau</b>",

"Knowing is not enough; we must apply. Willing is not enough; we must do. 
<br/><b>Johann Wolfgang von Goethe</b>",

"Think twice before you speak, because your words and influence will plant the seed of either success or failure in the mind of another. 
<br/><b>Napoleon Hill </b>",

"It is better to conquer yourself than to win a thousand battles. Then the victory is yours. It cannot be taken from you, not by angels or by demons, heaven or hell. 
<br/><b>Buddha </b>",

"Keep steadily before you the fact that all true success depends at last upon yourself. 
<br/><b>Theodore T. Hunger</b>",

"I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel. 
<br/><b>Maya Angelou</b>",

"The talent of success is nothing more than doing what you can do, well. 
<br/><b>Henry W. Longfellow</b>",

"When you dance, your purpose is not to get to a certain place on the floor. It's to enjoy each step along the way.
<br/><b>Wayne Dyer </b>",

"I try to learn from the past, but I plan for the future by focusing exclusively on the present. That's were the fun is. 
<br/><b>Donald Trump </b>",

"Whether you think that you can, or that you can't, you are usually right.
<br/><b>Henry Ford </b>",

"We are all faced with a series of great opportunities brilliantly disguised as impossible situations.
<br/><b>Charles R. Swindoll </b>",

"Don't hold to anger, hurt or pain. They steal your energy and keep you from love. 
<br/><b>Leo Buscaglia</b>",

"If you want others to be happy, practice compassion. If you want to be happy, practice compassion. 
<br/><b>Dalai Lama </b>",

"Life shrinks or expands in proportion to one's courage. 
<br/><b>Anais Nin</b>",

"There is only one person who could ever make you happy, and that person is you. 
<br/><b>David Burns</b>",

"Be careful the environment you choose for it will shape you; be careful the friends you choose for you will become like them. 
<br/><b>W. Clement Stone </b>",

"Whatever the mind of man can conceive and believe, it can achieve. 
<br/><b>W. Clement Stone</b>",

"I've learned that you shouldn't go through life with a catcher's mitt on both hands; you need to be able to throw something back. 
<br/><b>Maya Angelou </b>",

"Give me a stock clerk with a goal and I’ll give you a man who will make history. Give me a man with no goals and I’ll give you a stock clerk. 
<br/><b>J.C. Penney </b>",

"Sing like no one's listening, love like you've never been hurt, dance like nobody's watching, and live like its heaven on earth.
<br/><b>Mark Twain </b>",

"Early to bed, early to rise, makes a man healthy, wealthy and wise
<br/><b>Benjamin Franklin </b>",

"Success is not final, failure is not fatal: it is the courage to continue that counts.
<br/><b>Winston Churchill </b>",

"Know where to find the information and how to use it - That's the secret of success.
<br/><b>Albert Einstein </b>",

"Do not be too moral. You may cheat yourself out of much life. Aim above morality. Be not simply good; be good for something. 
<br/><b>Henry David Thoreau</b>",

"I've failed over and over and over again in my life and that is why I succeed. 
<br/><b>Michael Jordan </b>",

"Anyone who stops learning is old, whether at twenty or eighty. Anyone who keeps learning stays young. The greatest thing in life is to keep your mind young. 
<br/><b>Henry Ford </b>",

"A successful man is one who can lay a firm foundation with the bricks others have thrown at him. 
<br/><b>David Brinkley</b>",

"I don't know the key to success, but the key to failure is trying to please everybody. 
<br/><b>Bill Cosby </b>",

"Success is how high you bounce when you hit bottom. 
<br/><b>George S. Patton</b>",

"Today, the greatest single source of wealth is between your ears. Today, wealth is contained in brainpower, not brutepower 
<br/><b>Brian Tracy</b>",

"You can't expect abundance to work in just one direction. If the tide only came in we would all drown. 
<br/><b>Unknown</b>",

"If you have built castles in the air, your work need not be lost; that is where they should be. Now put foundations under them. 
<br/><b>Henry David Thoreau</b>",

"If there is any one secret of success, it lies in the ability to get the other person's point of view and see things from that person's angle as well as from your own. 
<br/><b>Henry Ford </b>",

"People take different roads seeking fulfillment and happiness. Just because they're not on your road doesn't mean they've gotten lost. 
<br/><b>Dalai Lama</b>",

"Happiness is not achieved by the conscious pursuit of happiness; it is generally the by-product of other activities. 
<br/><b>Aldous Huxley</b>",

"Great spirits have always encountered violent opposition from mediocre minds. 
<br/><b>Albert Einstein</b>",

"If you are not willing to risk the unusual, you will have to settle for the ordinary. 
<br/><b>Jim Rohn </b>",

"Give me six hours to chop down a tree and I will spend the first four sharpening the axe. 
<br/><b>Abraham Lincoln </b>",

"The difference between a successful person and others is not a lack of strength, not a lack of knowledge, but rather a lack in will. 
<br/><b>Vince Lombardi</b>",

"You can't build a reputation on what you are going to do. 
<br/><b>Henry Ford</b>",

"I never looked at the consequences of missing a big shot... when you think about the consequences you always think of a negative result. 
<br/><b>Michael Jordan </b>",

"In the hopes of reaching the moon men fail to see the flowers that blossom at their feet. 
<br/><b>Albert Schweitzer</b>",

"It is literally true that you can succeed best and quickest by helping others to succeed. 
<br/><b>Napoleon Hill </b>",

"Nothing is predestined: The obstacles of your past can become the gateways that lead to new beginnings. 
<br/><b>Ralph Blum</b>",

"In order to succeed, your desire for success should be greater than your fear of failure.
<br/><b>Bill Cosby </b>",

"The two most important requirements for major success are: first, being in the right place at the right time, and second, doing something about it.
<br/><b>Ray Kroc </b>",

"Instead of worrying about what people say of you, why not spend time trying to accomplish something they will admire.
<br/><b>Dale Carnegie </b>",

"Your imagination is your preview of life's coming attractions. 
<br/><b>Albert Einstein</b>",

"You must give some time to your fellow men. Even if it's a little thing, do something for others - something for which you get no pay but the privilege of doing it. 
<br/><b>Albert Schweitzer</b>",

"In the absence of clearly-defined goals, we become strangely loyal to performing daily trivia until ultimately we become enslaved by it. 
<br/><b>Robert Heinlein</b>",

"A hero is no braver than an ordinary man, but he is braver five minutes longer. 
<br/><b>Ralph Waldo Emerson</b>",

"There is no passion to be found playing small - in settling for a life that is less than the one you are capable of living. 
<br/><b>Nelson Mandela </b>",

"I know of no more encouraging fact than the unquestionable ability of man to elevate his life by conscious endeavor. 
<br/><b>Henry David Thoreau </b>",

"The big secret in life is that there is no big secret. Whatever your goal, you can get there if you're willing to work. 
<br/><b>Oprah Winfrey</b>",

"Happiness is not something you postpone for the future; it is something you design for the present. 
<br/><b>Jim Rohn </b>",

"For to be free is not merely to cast off one's chains, but to live in a way that respects and enhances the freedom of others. 
<br/><b>Nelson Mandela </b>",

"All growth depends upon activity. There is no development physically or intellectually without effort, and effort means work. 
<br/><b>Calvin Coolidge</b>",

"It was a high counsel that I once heard given to a young person, \"Always do what you are afraid to do.\" 
<br/><b>Ralph Waldo Emerson</b>",

"Being deeply loved by someone gives you strength, while loving someone deeply gives you courage.
<br/><b>Lao Tzu </b>",

"Success is the good fortune that comes from aspiration, desperation, perspiration and inspiration. 
<br/><b>Evan Esar</b>",

"Success does not consist in never making blunders, but in never making the same one a second time. 
<br/><b>Josh Billings</b>",

"The great thing in the world is not so much where we stand as in what direction we are moving. 
<br/><b>Oliver Wendell Holmes</b>",

"There is just one life for each of us: our own. 
<br/><b>Euripides</b>",

"Thousands of candles can be lit from a single candle, and the life of the candle will not be shortened. Happiness never decreases by being shared.
<br/><b>Buddha </b>",

"Only after we can learn to forgive ourselves can we accept others as they are because we don't feel threatened by anything about them which is better than us.
<br/><b>Stephen Covey </b>",

"When you judge another, you do not define them, you define yourself.
<br/><b>Wayne Dyer </b>",

"After the game, the king and the pawn go into the same box. 
<br/><b>Italian Proverb</b>",

"We are the creative force of our life, and through our own decisions rather than our conditions, if we carefully learn to do certain things, we can accomplish those goals. 
<br/><b>Stephen Covey </b>",

"Character is like a tree and reputation like a shadow. The shadow is what we think of it; the tree is the real thing. 
<br/><b>Abraham Lincoln </b>",

"People who are always making allowances for themselves soon go bankrupt.
<br/><b>Mary Pettibone Poole </b>",


/* 888888888888888888888888888888888888888 */


"There is no such thing in anyone's life as an unimportant day. 
<br/><b>Alexander Woollcott </b>",

"Commitment leads to action. Action brings your dream closer. 
<br/><b>Marcia Wieder</b>",

"Change will not come if we wait for some other person or some other time. We are the ones we've been waiting for. We are the change that we seek. 
<br/><b>Barack Obama </b>",

"Nothing can stop the man with the right mental attitude from achieving his goal; nothing on earth can help the man with the wrong mental attitude. 
<br/><b>Thomas Jefferson</b>",

"Man, alone, has the power to transform his thoughts into physical reality; man, alone, can dream and make his dreams come true. 
<br/><b>Napoleon Hill </b>",

"Try not to become a man of success but a man of value. 
<br/><b>Albert Einstein</b>",

"The fear of death follows from the fear of life. A man who lives fully is prepared to die at any time.
<br/><b>Mark Twain</b>",

"People who don't take risks generally make about two big mistakes a year. People who do take risks generally make about two big mistakes a year. 
<br/><b>Peter Drucker </b>",

"Cherish your visions and your dreams as they are the children of your soul, the blueprints of your ultimate achievements. 
<br/><b>Napoleon Hill </b>",

"There are no accidents... there is only some purpose that we haven't yet understood.
<br/><b>Deepak Chopra </b>",

"I am careful not to confuse excellence with perfection. Excellence, I can reach for; perfection is God's business. 
<br/><b>Michael J. Fox</b>",

"Old friends pass away, new friends appear. It is just like the days. An old day passes, a new day arrives. The important thing is to make it meaningful: a meaningful friend - or a meaningful day. 
<br/><b>Dalai Lama </b>",

"When I let go of what I am, I become what I might be
<br/><b>Lao Tzu </b>",

"They can because they think they can. 
<br/><b>Virgil </b>",

"An eye for an eye only ends up making the whole world blind. 
<br/><b>Mohandas Gandhi </b>",

"Every artist was first an amateur. 
<br/><b>Ralph Waldo Emerson</b>",

"People often say that this or that person has not yet found himself. But the self is not something one finds, it is something one creates.
<br/><b>Thomas S. Szasz </b>",

"Unless you try to do something beyond what you have already mastered, you will never grow.
<br/><b>Ralph Waldo Emerson </b>",

"There are those who dream and wish and there are those who dream and work.
<br/><b>Jeune.E. McIntyre. </b>",

"There are no such things as limits to growth, because there are no limits to the human capacity for intelligence, imagination, and wonder
<br/><b>Ronald Reagan </b>",

"History is a relentless master. It has no present, only the past rushing into the future. To try to hold fast is to be swept aside. 
<br/><b>John F. Kennedy </b>",

"No man is a failure who is enjoying life.
<br/><b>William Feather </b>",

"Look at everything as though you were seeing it either for the first or last time. Then your time on earth will be filled with glory. 
<br/><b>Betty Smith</b>",

"Many of life's failures are people who did not realize how close they were to success when they gave up. 
<br/><b>Thomas Edison</b>",

"It doesn't matter where you are coming from. All that matters is where you are going. 
<br/><b>Brian Tracy</b>",

"Instead of worrying about what people say of you, why not spend time trying to accomplish something they will admire. 
<br/><b>Dale Carnegie </b>",

"Be miserable. Or motivate yourself. Whatever has to be done, it's always your choice.
<br/><b>Wayne Dyer </b>",

"All our dreams can come true, if we have the courage to pursue them. 
<br/><b>Walt Disney </b>",

"Remember, happiness doesn't depend upon who you are or what you have, it depends solely upon what you think.
<br/><b>Dale Carnegie </b>",

"A person who has a cat by the tail knows a whole lot more about cats than someone who has just read about them. 
<br/><b>Mark Twain</b>",

"Be Content with what you have; rejoice in the way things are. When you realize there is nothing lacking, the whole world belongs to you.
<br/><b>Lao Tzu </b>",

"The future belongs to those who believe in the beauty of their dreams. 
<br/><b>Eleanor Roosevelt</b>",

"The only man who never makes mistakes is the man who never does anything.
<br/><b>Theodore Roosevelt</b>",

"A dog is not considered a good dog because he is a good barker. A man is not considered a good man because he is a good talker. 
<br/><b>Buddha </b>",

"Man's mind, once stretched by a new idea, never regains its original dimensions. 
<br/><b>Oliver Wendell Holmes, Jr </b>",

"Wealth, like happiness, is never attained when sought after directly. It comes as a by-product of providing a useful service. 
<br/><b>Henry Ford </b>",

"Don't judge those who try and fail, judge those who fail to try. 
<br/><b>Unknown</b>",

"The nearest way to glory is to strive to be what you wish to be thought to be.
<br/><b>Socrates</b>",

"I can accept failure, everyone fails at something. But I can't accept not trying. 
<br/><b>Michael Jordan </b>",

"Every great man, every successful man, no matter what the field of endeavor, has known the magic that lies in these words: every adversity has the seed of an equivalent or greater benefit. 
<br/><b>W. Clement Stone </b>",

"Opportunities are like sunrises. If you wait too long, you miss them. 
<br/><b>Unknown</b>",

"Once you have mastered time, you will understand how true it is that most people overestimate what they can accomplish in a year - and underestimate what they can achieve in a decade. 
<br/><b>Tony Robbins </b>",

"Once you have mastered time, you will understand how true it is that most people overestimate what they can accomplish in a year - and underestimate what they can achieve in a decade. 
<br/><b>Tony Robbins </b>",

"The man who trims himself to suit everybody will soon whittle himself away. 
<br/><b>Charles Schwab</b>",

"If I'd had some set idea of a finish line, don't you think I would have crossed it years ago? 
<br/><b>Bill Gates </b>",

"The truth is that there is nothing noble in being superior to somebody else. The only real nobility is in being superior to your former self. 
<br/><b>Whitney Young</b>",

"Success isn't a result of spontaneous combustion. You must set yourself on fire. 
<br/><b>Arnold H. Glasow </b>",

"He who is not contented with what he has, would not be contented with what he would like to have. 
<br/><b>Socrates</b>",

"The man of wisdom is never of two minds; the man of benevolence never worries; the man of courage is never afraid. 
<br/><b>Confucius</b>",

"Most people have no idea of the giant capacity we can immediately command when we focus all of our resources on mastering a single area of our lives. 
<br/><b>Tony Robbins </b>",

"A friend is one who knows us, but loves us anyway. 
<br/><b>Jerome Cummings</b>",

"Are you bored with life? Then throw yourself into some work you believe in with all your heart, live for it, die for it, and you will find happiness that you had thought could never be yours. 
<br/><b>Dale Carnegie </b>",

"Failure is not a single, cataclysmic event. You don't fail overnight. Instead, failure is a few errors in judgement, repeated every day. 
<br/><b>Jim Rohn </b>",

"Do not anticipate trouble, or worry about what may never happen. Keep in the sunlight. 
<br/><b>Benjamin Franklin</b>",

"Happiness depends more on the inward disposition of mind than on outward circumstances. 
<br/><b>Benjamin Franklin</b>",

"Stretching his hand up to reach the stars, too often man forgets the flowers at his feet. 
<br/><b>Jeremy Bentham </b>",

"What we plant in the soil of contemplation, we shall reap in the harvest of action. 
<br/><b>Meister Eckhart </b>",

"When you see a man of worth, think of how you may emulate him. When you see one who is unworthy, examine yourself. 
<br/><b>Confucius</b>",

"Success is getting what you want. Happiness is wanting what you get. 
<br/><b>Dale Carnegie</b>",

"Justice consists not in being neutral between right and wrong, but in finding out the right and upholding it, wherever found, against the wrong. 
<br/><b>Theodore Roosevelt</b>",

"Don't aim for success if you want it; just do what you love and believe in, and it will come naturally. 
<br/><b>David Frost </b>",

"I never think of the future - it comes soon enough. 
<br/><b>Albert Einstein</b>",

"A real decision is measured by the fact that you've taken a new action. If there's no action, you haven't truly decided. 
<br/><b>Tony Robbins </b>",

"Happy are those who dream dreams and are ready to pay the price to make them come true. 
<br/><b>Leon J. Suenes</b>",

"The only way of finding the limits of the possible is by going beyond them into the impossible. 
<br/><b>Arthur C. Clarke</b>",

"You cannot dream yourself into a character: you must hammer and forge yourself into one. 
<br/><b>Henry D. Thoreau</b>",

"Knowing is not enough; we must apply. Willing is not enough; we must do. 
<br/><b>Johann Wolfgang von Goethe</b>",

"Think twice before you speak, because your words and influence will plant the seed of either success or failure in the mind of another. 
<br/><b>Napoleon Hill </b>",

"It is better to conquer yourself than to win a thousand battles. Then the victory is yours. It cannot be taken from you, not by angels or by demons, heaven or hell. 
<br/><b>Buddha </b>",

"Keep steadily before you the fact that all true success depends at last upon yourself. 
<br/><b>Theodore T. Hunger</b>",

"I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel. 
<br/><b>Maya Angelou</b>",

"The talent of success is nothing more than doing what you can do, well. 
<br/><b>Henry W. Longfellow</b>",

"When you dance, your purpose is not to get to a certain place on the floor. It's to enjoy each step along the way.
<br/><b>Wayne Dyer </b>",

"I try to learn from the past, but I plan for the future by focusing exclusively on the present. That's were the fun is. 
<br/><b>Donald Trump </b>",

"Whether you think that you can, or that you can't, you are usually right.
<br/><b>Henry Ford </b>",

"We are all faced with a series of great opportunities brilliantly disguised as impossible situations.
<br/><b>Charles R. Swindoll </b>",

"Don't hold to anger, hurt or pain. They steal your energy and keep you from love. 
<br/><b>Leo Buscaglia</b>",

"If you want others to be happy, practice compassion. If you want to be happy, practice compassion. 
<br/><b>Dalai Lama </b>",

"Life shrinks or expands in proportion to one's courage. 
<br/><b>Anais Nin</b>",

"There is only one person who could ever make you happy, and that person is you. 
<br/><b>David Burns</b>",

"Be careful the environment you choose for it will shape you; be careful the friends you choose for you will become like them. 
<br/><b>W. Clement Stone </b>",

"Whatever the mind of man can conceive and believe, it can achieve. 
<br/><b>W. Clement Stone</b>",

"I've learned that you shouldn't go through life with a catcher's mitt on both hands; you need to be able to throw something back. 
<br/><b>Maya Angelou </b>",

"Give me a stock clerk with a goal and I’ll give you a man who will make history. Give me a man with no goals and I’ll give you a stock clerk. 
<br/><b>J.C. Penney </b>",

"Sing like no one's listening, love like you've never been hurt, dance like nobody's watching, and live like its heaven on earth.
<br/><b>Mark Twain </b>",

"Early to bed, early to rise, makes a man healthy, wealthy and wise
<br/><b>Benjamin Franklin </b>",

"Success is not final, failure is not fatal: it is the courage to continue that counts.
<br/><b>Winston Churchill </b>",

"Know where to find the information and how to use it - That's the secret of success.
<br/><b>Albert Einstein </b>",

"Do not be too moral. You may cheat yourself out of much life. Aim above morality. Be not simply good; be good for something. 
<br/><b>Henry David Thoreau</b>",

"I've failed over and over and over again in my life and that is why I succeed. 
<br/><b>Michael Jordan </b>",

"Anyone who stops learning is old, whether at twenty or eighty. Anyone who keeps learning stays young. The greatest thing in life is to keep your mind young. 
<br/><b>Henry Ford </b>",

"A successful man is one who can lay a firm foundation with the bricks others have thrown at him. 
<br/><b>David Brinkley</b>",

"I don't know the key to success, but the key to failure is trying to please everybody. 
<br/><b>Bill Cosby </b>",

"Success is how high you bounce when you hit bottom. 
<br/><b>George S. Patton</b>",

"Today, the greatest single source of wealth is between your ears. Today, wealth is contained in brainpower, not brutepower 
<br/><b>Brian Tracy</b>",

"You can't expect abundance to work in just one direction. If the tide only came in we would all drown. 
<br/><b>Unknown</b>",

"If you have built castles in the air, your work need not be lost; that is where they should be. Now put foundations under them. 
<br/><b>Henry David Thoreau</b>",

"If there is any one secret of success, it lies in the ability to get the other person's point of view and see things from that person's angle as well as from your own. 
<br/><b>Henry Ford </b>",

"People take different roads seeking fulfillment and happiness. Just because they're not on your road doesn't mean they've gotten lost. 
<br/><b>Dalai Lama</b>",

"Happiness is not achieved by the conscious pursuit of happiness; it is generally the by-product of other activities. 
<br/><b>Aldous Huxley</b>",

"Great spirits have always encountered violent opposition from mediocre minds. 
<br/><b>Albert Einstein</b>",

"If you are not willing to risk the unusual, you will have to settle for the ordinary. 
<br/><b>Jim Rohn </b>",

"Give me six hours to chop down a tree and I will spend the first four sharpening the axe. 
<br/><b>Abraham Lincoln </b>",

"The difference between a successful person and others is not a lack of strength, not a lack of knowledge, but rather a lack in will. 
<br/><b>Vince Lombardi</b>",

"You can't build a reputation on what you are going to do. 
<br/><b>Henry Ford</b>",

"I never looked at the consequences of missing a big shot... when you think about the consequences you always think of a negative result. 
<br/><b>Michael Jordan </b>",

"In the hopes of reaching the moon men fail to see the flowers that blossom at their feet. 
<br/><b>Albert Schweitzer</b>",

"It is literally true that you can succeed best and quickest by helping others to succeed. 
<br/><b>Napoleon Hill </b>",

"Nothing is predestined: The obstacles of your past can become the gateways that lead to new beginnings. 
<br/><b>Ralph Blum</b>",

"In order to succeed, your desire for success should be greater than your fear of failure.
<br/><b>Bill Cosby </b>",

"The two most important requirements for major success are: first, being in the right place at the right time, and second, doing something about it.
<br/><b>Ray Kroc </b>",

"Instead of worrying about what people say of you, why not spend time trying to accomplish something they will admire.
<br/><b>Dale Carnegie </b>",

"Your imagination is your preview of life's coming attractions. 
<br/><b>Albert Einstein</b>",

"You must give some time to your fellow men. Even if it's a little thing, do something for others - something for which you get no pay but the privilege of doing it. 
<br/><b>Albert Schweitzer</b>",

"In the absence of clearly-defined goals, we become strangely loyal to performing daily trivia until ultimately we become enslaved by it. 
<br/><b>Robert Heinlein</b>",

"A hero is no braver than an ordinary man, but he is braver five minutes longer. 
<br/><b>Ralph Waldo Emerson</b>",

"There is no passion to be found playing small - in settling for a life that is less than the one you are capable of living. 
<br/><b>Nelson Mandela </b>",

"I know of no more encouraging fact than the unquestionable ability of man to elevate his life by conscious endeavor. 
<br/><b>Henry David Thoreau </b>",

"The big secret in life is that there is no big secret. Whatever your goal, you can get there if you're willing to work. 
<br/><b>Oprah Winfrey</b>",

"Happiness is not something you postpone for the future; it is something you design for the present. 
<br/><b>Jim Rohn </b>",

"For to be free is not merely to cast off one's chains, but to live in a way that respects and enhances the freedom of others. 
<br/><b>Nelson Mandela </b>",

"All growth depends upon activity. There is no development physically or intellectually without effort, and effort means work. 
<br/><b>Calvin Coolidge</b>",

"It was a high counsel that I once heard given to a young person, \"Always do what you are afraid to do.\" 
<br/><b>Ralph Waldo Emerson</b>",

"Being deeply loved by someone gives you strength, while loving someone deeply gives you courage.
<br/><b>Lao Tzu </b>",

"Success is the good fortune that comes from aspiration, desperation, perspiration and inspiration. 
<br/><b>Evan Esar</b>",

"Success does not consist in never making blunders, but in never making the same one a second time. 
<br/><b>Josh Billings</b>",

"The great thing in the world is not so much where we stand as in what direction we are moving. 
<br/><b>Oliver Wendell Holmes</b>",

"Thousands of candles can be lit from a single candle, and the life of the candle will not be shortened. Happiness never decreases by being shared.
<br/><b>Buddha </b>",

"Only after we can learn to forgive ourselves can we accept others as they are because we don't feel threatened by anything about them which is better than us.
<br/><b>Stephen Covey </b>",

"When you judge another, you do not define them, you define yourself.
<br/><b>Wayne Dyer </b>",

"After the game, the king and the pawn go into the same box. 
<br/><b>Italian Proverb</b>",

"We are the creative force of our life, and through our own decisions rather than our conditions, if we carefully learn to do certain things, we can accomplish those goals. 
<br/><b>Stephen Covey </b>",

"Character is like a tree and reputation like a shadow. The shadow is what we think of it; the tree is the real thing. 
<br/><b>Abraham Lincoln </b>",

"People who are always making allowances for themselves soon go bankrupt.
<br/><b>Mary Pettibone Poole </b>"

);


$r = rand(0,370);

$i = 0;

while ($i < 366) {
    $dates[$i++] = $i++;
}

$v = date(z);


if ($data['update'] == "Daily"){
	
	echo '<div style ="padding: 10px 0;">';
	echo $quotes[$v].'<br/></div>';
	
} else {

 	echo '<div style ="padding: 10px 0;">';
	echo $quotes[$r].'<br/></div>';
}

/* Change Options */


if ($data['update'] == "Daily"){
$thelink = "WordPress Quotes";
} else {
$thelink = "WordPress Quotings";
}
		
if ($data['credit'] == "Yes"){
echo 'Powered By: <a href="http://www.ec-tech.info/">'.$thelink.'</a>';} else {}

echo $args['after_widget'];
  }
  
function register(){
    register_sidebar_widget('WordPress Quotes', array('WordPress_Quotes', 'widget'));
    register_widget_control('WordPress Quotes', array('WordPress_Quotes', 'control'));
  }
}



?>
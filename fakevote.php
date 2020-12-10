<?php

class qa_html_theme_layer extends qa_html_theme_base
{
    
  public function vote_count($post)
	{
		// You can also use $post['upvotes_raw'], $post['downvotes_raw'], $post['netvotes_raw'] to get
		// raw integer vote counts, for graphing or showing in other non-textual ways

		$this->output('<div class="qa-vote-count ' . (($post['vote_view'] == 'updown') ? 'qa-vote-count-updown' : 'qa-vote-count-net') . '"' . @$post['vote_count_tags'] . '>');

		if ($post['vote_view'] == 'updown') {
			$this->output('<span class="selected qa-upvote-count"><span class="selected qa-upvote-count-data">'.($post['upvotes_raw']+5).'</span><span class="selected qa-upvote-count-pad"> thích <meta itemprop="upvoteCount" content="'.($post['upvotes_raw']+5).'"></span>
</span>');
			$this->output_split($post['downvotes_view'], 'qa-downvote-count');
		} else {
			$this->output('<span class="qa-netvote-count"><span class="qa-netvote-count-data">.($post['netvotes_raw']+5).</span><span class="qa-netvote-count-pad"> vote <meta itemprop="upvoteCount" content=".($post['netvotes_raw']+5)."></span>
</span>');
		}

		$this->output('</div>');
	}

    
}

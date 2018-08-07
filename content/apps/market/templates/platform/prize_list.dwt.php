<?php defined('IN_ECJIA') or exit('No permission resources.');?>
<!-- {extends file="ecjia-platform.dwt.php"} -->

<!-- {block name="footer"} -->
<script type="text/javascript">
	ecjia.platform.platform_activity.init();
</script>
<!-- {/block} -->

<!-- {block name="home-content"} -->
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">{$ur_here}</h4>
				{if $action_link}
				<a class="btn btn-outline-primary plus_or_reply data-pjax float-right" href="{$action_link.href}" id="sticky_a">
					<i class="fa fa-reply"></i> {$action_link.text}</a>
				{/if}
			</div>

			<div class="col-lg-12">
				<div class="card-body">
					<form method="post" action="{$form_action}" name="listForm">
						<div class="list-div list media_captcha wookmark warehouse" id="listDiv">
							<ul class="wookmark-ul">
								<!-- {foreach from=$data.item item=prize} -->
								<li class="thumbnail">
									<div class="prize_level_div">
										<div class="prize_level prize_level_{$prize.prize_level}">
											<div class="model-title ware_name">
												<span>
													{if $prize.prize_level eq '0'} [特等奖] {elseif $prize.prize_level eq '1'} [一等奖] {elseif $prize.prize_level eq '2'} [二等奖] {elseif
													$prize.prize_level eq '3'} [三等奖] {elseif $prize.prize_level eq '4'} [四等奖] {elseif $prize.prize_level eq '5'}
													[五等奖] {/if} {$prize.prize_name}
												</span>
												<br>
												<span>{$prize.prize_value_label}</span>
											</div>
											<p class="model-inner">
												<span class="float-left">{$prize.prize_number}&nbsp;/&nbsp;{$prize.prize_prob}%</span>
												<span class="float-right"> {if $prize.prize_type eq '0'} 未中奖 {elseif $prize.prize_type eq '1'} 礼券红包 {elseif $prize.prize_type eq '2'}
													实物奖品 {elseif $prize.prize_type eq '3'} 送积分 {elseif $prize.prize_type eq '4'} 推荐商品 {elseif $prize.prize_type
													eq '5'} 推荐店铺 {elseif $prize.prize_type eq '6'} 现金红包 {/if}
												</span>
											</p>
										</div>
									</div>
									<div class="input">
										<a class="data-pjax float-left p_l20" title="{t}编辑{/t}" href='{RC_Uri::url("market/platform/activity_prize_edit", "code={$code}&p_id={$prize.prize_id}")}'>
											<i class="ft-edit"></i>
										</a>
										{if $prize.is_used eq 0}
										<a class="float-left p_l10 ajaxremove no-underline" data-toggle="ajaxremove" data-msg="您确定要删除该活动奖品池吗？" title="{t}删除{/t}" href='{RC_Uri::url("market/platform/activity_prize_remove", "code={$code}&p_id={$prize.prize_id}")}'>
											<i class="ft-trash-2"></i>
										</a>
										{else}
										<span class="prize-used">使用中</span>
										{/if}
									</div>
								</li>
								<!-- {/foreach} -->
								{if $smarty.get.page eq $data.total_pages || !$smarty.get.page}
								<li class="thumbnail add-ware-house">
									<a class="more data-pjax" href='{RC_Uri::url("market/platform/activity_prize_add", "code={$code}")}'>
										<i class="ft-plus"></i>
									</a>
								</li>
								{/if}
							</ul>
							<!-- {$data.page} -->
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- {/block} -->
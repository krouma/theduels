<section class="player">
	<div class="player__info">
		<header class="player__name"><?php echo $player['name']; ?></header>
		<div class="player__image">
			<img src="/theduely/media/images/avatars/<?php echo $player['avatar']; ?>.png">
		</div>
		<div class="player__score">Skóre: <?php echo $player['score']; ?></div>
	</div>
	
	<div class="player__skills">
		<table>
			<tbody>
				<tr class="player__skills__bars">
					<?php foreach ($player_skills as $skill): ?>
						<td><div class="player__skills__bar" style="height: <?php echo $skill['value']; ?>em"></div></td>
					<?php endforeach; ?>
				</tr>
				<tr class="player__skills__values">
					<?php foreach ($player_skills as $skill): ?>
						<td><div class="player__skills__value"><?php echo $skill['value']; ?></div></td>
					<?php endforeach; ?>
				</tr>
				<tr class="player__skills__labels">
					<?php foreach ($player_skills as $skill): ?>
						<td><div class="player__skills__label"><?php echo $skill['name']; ?></div></td>
					<?php endforeach; ?>
				</tr>
			</tbody>
		</table>
	</div>
</section>
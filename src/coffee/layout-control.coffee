'use-strict'
$(document).ready ->
	# DISABLE ANCHORS
	# $('.disable-anchors a').click (e)->
	# 	e.preventDefault()
	# 	return

	# HREFerence for anchor blocks 
	# $('[data-href]').click((e)->
	# 	locationArr = window.location.pathname.split('/')
	# 	lastPath = locationArr[locationArr.length - 1]
	# 	mainPath = locationArr[locationArr.length - 2]
	# 	pathObj = {}
	# 	pathObj[mainPath] = lastPath
	# 	window.history.pushState(pathObj, '', lastPath)
	# 	document.location.replace($(this).data('href'))
	# 	return
	# 	)
	
	# PROJECT DETAILS
	$('.project-details-trigger').click (e)->
		$('.project-details-trigger i').toggleClass 'icon-minus'
		$('.gallery-container').toggleClass 'display-project-details'
		return

	$projectDetailsScroll = $('.project-details-scroll')
	$projectDetailsScrollDown = $('.project-details-scroll-down')
	$translate = 0;
	$scrolled = 0;
	$projectDetailsScrollDown.click (e)->
		scrolled=scrolled+50;
		if $translate < 100
			$projectDetailsScroll.css({
				"transform": 'translateY(-' + ($translate += 25) + '%)'
				"transform-origin": 'translateY(-' + ($translate += 25) + '%)'
				"webkit-transform": 'translateY(-' + ($translate += 25) + '%)'
				"webkit-transform-origin": 'translateY(-' + ($translate += 25) + '%)'
				})
	

		else
			$translate = 0
			$projectDetailsScroll.css({
				"transform": 'translateY(0)'
				"transform-origin": 'translateY(0)'
				"webkit-transform": 'translateY(0)'
				"webkit-transform-origin": 'translateY(0)'
				})
		return



	# TRANSFORM ICONS INITIALIZE
	# transformicons.add('.tcon')

	return # END ON READY
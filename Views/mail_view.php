<!DOCTYPE html>
<html lang="<?=service('request')->getLocale()?>" xmlns:o="urn:schemas-microsoft-com:office:office"
	xmlns:v="urn:schemas-microsoft-com:vml">

<head>
	<title></title>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			margin: 0;
			padding: 0;
		}

		a[x-apple-data-detectors] {
			color: inherit !important;
			text-decoration: inherit !important;
		}

		#MessageViewBody a {
			color: inherit;
			text-decoration: none;
		}

		p {
			line-height: inherit
		}

		@media (max-width:540px) {
			.icons-inner {
				text-align: center;
			}

			.icons-inner td {
				margin: 0 auto;
			}

			.row-content {
				width: 100% !important;
			}

			.column .border {
				display: none;
			}

			table {
				table-layout: fixed !important;
			}

			.stack .column {
				width: 100%;
				display: block;
			}
		}
	</style>
</head>

<body style="margin: 0; background-color: #fcfcfc; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
	<table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation"
		style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fcfcfc;" width="100%">
		<tbody>
			<tr>
				<td>
					<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation"
						style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
						<tbody>
							<tr>
								<td>
									<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack"
										role="presentation"
										style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 520px;" width="520">
										<tbody>
											<tr>
												<td class="column column-1"
													style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;"
													width="100%">
													<div class="spacer_block" style="height:40px;line-height:40px;font-size:1px;"> </div>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation"
						style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fcfcfc; background-size: auto;"
						width="100%">
						<tbody>
							<tr>
								<td>
									<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack"
										role="presentation"
										style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; background-size: auto; width: 520px;"
										width="520">
										<tbody>
											<tr>
												<td class="column column-1"
													style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-bottom: 1px solid #DFDFDF; border-left: 1px solid #DFDFDF; border-right: 1px solid #DFDFDF; border-top: 1px solid #DFDFDF; padding-left: 20px; padding-right: 20px; padding-top: 20px; padding-bottom: 20px;"
													width="100%">
													<?php if ($title): ?>
													<table border="0" cellpadding="0" cellspacing="0" class="heading_block" role="presentation"
														style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
														<tr>
															<td style="width:100%;text-align:center;">
																<h1
																	style="margin: 0; color: #555555; font-size: 23px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; line-height: 120%; text-align: center; direction: ltr; font-weight: 700; letter-spacing: normal; margin-top: 0; margin-bottom: 0;">
																	<span class="tinyMce-placeholder"><?=$title?></span></h1>
															</td>
														</tr>
													</table>
													<?php endif; ?>
													<?php if ($content_1): ?>
													<table border="0" cellpadding="10" cellspacing="0" class="paragraph_block" role="presentation"
														style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
														<tr>
															<td>
																<div
																	style="color:#000000;font-size:14px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;font-weight:400;line-height:120%;text-align:center;direction:ltr;letter-spacing:0px;">
																	<p style="margin: 0;"><?=$content_1?></p>
																</div>
															</td>
														</tr>
													</table>
													<?php endif; ?>
													<?php if ($buttonLink): ?>
													<table border="0" cellpadding="10" cellspacing="0" class="button_block" role="presentation"
														style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
														<tr>
															<td>
																<div align="center">
																	<!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="###" style="height:42px;width:229px;v-text-anchor:middle;" arcsize="10%" stroke="false" fillcolor="#3AAEE0"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#ffffff; font-family:Arial, sans-serif; font-size:16px"><![endif]--><a
																		href="###"
																		style="text-decoration:none;display:block;color:#ffffff;background-color:#3AAEE0;border-radius:4px;width:50%; width:calc(50% - 2px);border-top:1px solid #3AAEE0;border-right:1px solid #3AAEE0;border-bottom:1px solid #3AAEE0;border-left:1px solid #3AAEE0;padding-top:5px;padding-bottom:5px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;"
																		target="_blank"><span
																			style="padding-left:20px;padding-right:20px;font-size:16px;display:inline-block;letter-spacing:normal;"><span
																				style="font-size: 16px; line-height: 2; mso-line-height-alt: 32px;"><?=($buttonTitle)?$buttonTitle:'Link'?></span></span></a>
																	<!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
																</div>
															</td>
														</tr>
													</table>
													<?php endif; ?>
													<?php if ($content_2): ?>
													<table border="0" cellpadding="10" cellspacing="0" class="paragraph_block" role="presentation"
														style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
														<tr>
															<td>
																<div
																	style="color:#000000;font-size:14px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;font-weight:400;line-height:120%;text-align:center;direction:ltr;letter-spacing:0px;">
																	<p style="margin: 0;"><?=$content_2?></p>
																</div>
															</td>
														</tr>
													</table>
													<?php endif; ?>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-3" role="presentation"
						style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
						<tbody>
							<tr>
								<td>
									<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack"
										role="presentation"
										style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 520px;" width="520">
										<tbody>
											<tr>
												<td class="column column-1"
													style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;"
													width="100%">
													<?php if ($footerText): ?>
													<table border="0" cellpadding="0" cellspacing="0" class="paragraph_block" role="presentation"
														style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
														<tr>
															<td>
																<div
																	style="color:#000000;font-size:14px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;font-weight:400;line-height:120%;text-align:left;direction:ltr;letter-spacing:0px;">
																	<p style="margin: 0;"><?=$footerText?></p>
																</div>
															</td>
														</tr>
													</table>
													<?php endif; ?>
													<table border="0" cellpadding="10" cellspacing="0" class="social_block" role="presentation"
														style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
														<tr>
															<td>
																<table align="center" border="0" cellpadding="0" cellspacing="0" class="social-table"
																	role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
																	width="144px">
																	<tr>
																		<?php if ($facebook): ?>
																		<td style="padding:0 2px 0 2px;"><a href="https://www.facebook.com/"
																				target="_blank"><img alt="Facebook" height="32" src="data:image/png;base64,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"
																					style="display: block; height: auto; border: 0;" title="Facebook"
																					width="32" /></a></td>
																		<?php endif; ?>
																		<?php if ($twitter): ?>
																		<td style="padding:0 2px 0 2px;"><a href="https://twitter.com/" target="_blank"><img
																					alt="Twitter" height="32" src="data:image/png;base64,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"
																					style="display: block; height: auto; border: 0;" title="Twitter"
																					width="32" /></a></td>
																		<?php endif; ?>
																		<?php if ($instagram): ?>
																		<td style="padding:0 2px 0 2px;"><a href="https://instagram.com/"
																				target="_blank"><img alt="Instagram" height="32" src="data:image/png;base64,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"
																					style="display: block; height: auto; border: 0;" title="Instagram"
																					width="32" /></a></td>
																		<?php endif; ?>
																		<?php if ($linkedin): ?>
																		<td style="padding:0 2px 0 2px;"><a href="https://www.linkedin.com/"
																				target="_blank"><img alt="LinkedIn" height="32" src="data:image/png;base64,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"
																					style="display: block; height: auto; border: 0;" title="LinkedIn"
																					width="32" /></a></td>
																		<?php endif; ?>
																	</tr>
																</table>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<?php /*
					<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-4" role="presentation"
						style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
						<tbody>
							<tr>
								<td>
									<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack"
										role="presentation"
										style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 520px;" width="520">
										<tbody>
											<tr>
												<td class="column column-1"
													style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;"
													width="100%">
													<table border="0" cellpadding="0" cellspacing="0" class="icons_block" role="presentation"
														style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
														<tr>
															<td
																style="vertical-align: middle; color: #9d9d9d; font-family: inherit; font-size: 15px; padding-bottom: 5px; padding-top: 5px; text-align: center;">
																<table cellpadding="0" cellspacing="0" role="presentation"
																	style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
																	<tr>
																		<td style="vertical-align: middle; text-align: center;">
																			<!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
																			<!--[if !vml]><!-->
																			<table cellpadding="0" cellspacing="0" class="icons-inner" role="presentation"
																				style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;">
																				<!--<![endif]-->
																				<tr>
																					<td
																						style="vertical-align: middle; text-align: center; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 6px;">
																						<a href="https://www.designedwithbee.com/" style="text-decoration: none;"
																							target="_blank"><img align="center" alt="Designed with BEE" class="icon"
																								height="32" src="images/bee.png"
																								style="display: block; height: auto; margin: 0 auto; border: 0;"
																								width="34" /></a></td>
																					<td
																						style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 15px; color: #9d9d9d; vertical-align: middle; letter-spacing: undefined; text-align: center;">
																						<a href="https://www.designedwithbee.com/"
																							style="color: #9d9d9d; text-decoration: none;" target="_blank">Designed
																							with BEE</a></td>
																				</tr>
																			</table>
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					*/ ?>
				</td>
			</tr>
		</tbody>
	</table><!-- End -->
</body>

</html>